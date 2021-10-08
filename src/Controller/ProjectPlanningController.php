<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Form\PlanningType;
use App\Entity\PlanningComment;
use App\Repository\UserRepository;
use App\Repository\ProjectRepository;
use Symfony\Component\Form\FormError;
use App\Repository\PlanningRepository;
use Doctrine\Persistence\ManagerRegistry;

use App\Repository\ProjectAccessRepository;
use App\Repository\PlanningCommentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ProjectPlanningController extends AbstractController
{
    /**
     * @Route("/project/{id}/planning", name="planning_list")
     */
    public function index($id, Request $request, ProjectAccessRepository $projectAccessRepository): Response
    {
        // pour personne externe, voir projets si accès              
        if ($this->isGranted('ROLE_EXTERNAL')) {
            $isAccess = false;            
            $access = $projectAccessRepository->findAllWithAccess($this->getUser()->getId());  
            foreach($access as $a) {
                if ($id == $a->getProject()->getId()) {
                    $isAccess = true;
                    break;
                }
            }             
            if (!$isAccess) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  
        }         

        //vérifie si y a un message suite à update ou nouvelle tâche
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));                
        return $this->render('planning/planning.html.twig', [            
            'projectId' => $id,
            'is_external' => $this->isGranted('ROLE_EXTERNAL') ? 'true' : 'false'
        ]);
    }
    
     /**
     * @Route("/project/{id}/planning/json", name="planning_list_json")
     */
    public function list_json($id, PlanningRepository $planningRepository): Response
    {       
        //récuperer tout les tâches
        $plannings = $planningRepository->findAllByProjectId($id);        

        //renvoi d'un fichier json
        return $this->json($plannings);
    } 

    /**
     * @Route("/project/{id}/planning/search", name="planning_search")
     */
    public function search(Request $request, PlanningRepository $planningRepository): Response
    {   
        //si pas de chaînes de caractères => tous les tâches
        if ($request->query->get('str') == '') {
            $plannings = $planningRepository->findAll();
        }
        else {
            //sinon tous les taches qui commencent par la chaîne de caractères encodé
            $plannings = $planningRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('planning/planning_list.html.twig', [
            'plannings' => $plannings
        ]);
    }

    /**
     * @Route("/project/{projectId}/planning/{taskId}/validForm", methods={"POST"}, name="planning_valid_form")
     */
    public function validForm(Request $request, ValidatorInterface $validator): Response
    {        
        $planning = new Planning();             
        $form = $this->createForm(ProjectWorkType::class, $planning);   
        $form->handleRequest($request);        
        $errors = $validator->validate($planning);        
        return $this->json(['errors' => $errors]);
    }

    /**
     * @Route("/project/{id}/planning/new", name="planning_new")
     */
    public function add($id, Request $request, ProjectRepository $projectRepository, PlanningRepository $planningRepository, UserRepository $userRepository, ManagerRegistry $managerRegistry): Response
    {
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        //récupération de l'id projet
        $projet = $projectRepository->find($id);

        //Création du planning dans le projet
        $dependencies = $planningRepository->findAllWithoutMe($id, 0);
        $tab = array();
        $vals = array_values($dependencies);
        foreach ($vals as $obj) {                                    
            $tab[$obj['name']] = $obj['id'];
        };      

        //Récupération des données encodés pour la tâche
        $planning = new Planning(); 
        $planning->setProject($projet);
        $planning->setStartDate(new \DateTime());
        $planning->setEndDate(new \DateTime('tomorrow'));   
        $planning->setDependencies($tab);
        $planning->setPercentDone(0);
        $planning->setColor('#2490ef');
        $form = $this->createForm(PlanningType::class, $planning, ['comment_required' => false]);

        // form submit
        $form->handleRequest($request);

        if ($form->isSubmitted()) {            
            // vérification coherence date, startDate must be >= starDate task dependency            
            if ($planning->getDependency() != null) {
                $parentTask = $planningRepository->find($planning->getDependency());                         
                if ($planning->getStartDate() < $parentTask->getStartDate()) {
                    $form->get('startDate')->addError(new FormError('La date de début doit être postérieure ou égale à la date de début de la tâche dépendante (' . $parentTask->getStartDate()->format('d/m/Y') . '-' . $parentTask->getEndDate()->format('d/m/Y') . ')'));
                }
            }            
        }
        //Vérification dud formulaire
        if ($form->isSubmitted() && $form->isValid()) { 
            // user
             $user = $userRepository->find($this->getUser()->getId());      
            // user and updateAt
            $planning->setUser($user);
            $planning->setUpdatedAt(new \DateTime());

            // planning comment
            $project = $projectRepository->findOneBy(['id' => $id]);     
            $planning_comment = new PlanningComment();
            $planning_comment->setUser($user);
            $planning_comment->setProject($project);
            $planning_comment->setPlanning($planning);
            $planning_comment->setDate(new \DateTime());            
            $planning_comment->setComment($planning->comment);

            // instanciation DB
            $em = $managerRegistry->getManager();
            $em->persist($planning);
            $em->flush();          
            
            // message            
            $this->addFlash('message', 'Tâche enregistrée');
            // redirect
            //return $this->redirectToRoute('planning_list', ['id' => $id]);
            return $this->redirectToRoute('project_edit', ['id' => $id, 'onglet' => 'planning']);
        }       

        return $this->render('planning/planning_edit.html.twig', [
            'form' => $form->createView(),
            'projectId' => $id,
            'id' => 0,
            'percentDone' => 0
        ]);
    }

    /**
     * @Route("/project/{id}/planning/{taskId}", methods={"GET","POST"}, name="planning_edit")
     */
    public function update(Request $request, $id, $taskId, ManagerRegistry $managerRegistry, PlanningRepository $planningRepository, UserRepository $userRepository, ProjectRepository $projectRepository): Response
    {
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        $planning = $planningRepository->findOneBy(['id' => $taskId]);       

        $dependencies = $planningRepository->findAllWithoutMe($id, $taskId);
        $tab = array();
        $vals = array_values($dependencies);
        foreach ($vals as $obj) {                                    
            $tab[$obj['name']] = $obj['id'];
        };   
        $planning->setDependencies($tab); 

        $form = $this->createForm(PlanningType::class, $planning, ['comment_required' => true]);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted()) {            
            // vérification coherence date, startDate must be >= starDate task dependency            
            if ($planning->getDependency() != null) {
                $parentTask = $planningRepository->find($planning->getDependency());     
                //dd($planning, $parentTask);
                if ($planning->getStartDate() < $parentTask->getStartDate()) {
                    $form->get('startDate')->addError(new FormError('La date de début doit être postérieure ou égale à la date de début de la tâche dépendante (' . $parentTask->getStartDate()->format('d/m/Y') . '-' . $parentTask->getEndDate()->format('d/m/Y') . ')'));
                }
            }            
        }
        if ($form->isSubmitted() && $form->isValid()) {  
            // user
            $user = $userRepository->find($this->getUser()->getId());         
            
            // user and updateAt
            $planning->setUser($user);
            $planning->setUpdatedAt(new \DateTime());

            // planning comment
            $project = $projectRepository->findOneBy(['id' => $id]);     
            $planning_comment = new PlanningComment();
            $planning_comment->setUser($user);
            $planning_comment->setProject($project);
            $planning_comment->setPlanning($planning);
            $planning_comment->setDate(new \DateTime());            
            $planning_comment->setComment($planning->comment);

            // save
            $em = $managerRegistry->getManager();
            $em->persist($planning);
            $em->persist($planning_comment);
            $em->flush();           
          
            // message            
            $this->addFlash('message', 'Tâche modifiée');
            // redirect
            //return $this->redirectToRoute('planning_list');
            return $this->redirectToRoute('project_edit', ['id' => $id, 'onglet' => 'planning']);
        }

        return $this->render('planning/planning_edit.html.twig', [
            'form' => $form->createView(),          
            'projectId' => $id,
            'id' => $planning->getId(),
            'percentDone' => $planning->getPercentDone()
        ]);
    }

    /**
     * @Route("/project/{id}/planning/{taskId}/dates", methods={"POST"}, name="planning_update_dates")
     */
    public function updateDates(Request $request, $taskId, ManagerRegistry $managerRegistry, PlanningRepository $planningRepository, UserRepository $userRepository): Response
    {      
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        // task
        $planning = $planningRepository->findOneBy(['id' => $taskId]);       
        // data
        parse_str($request->getContent(), $data);                
        $planning->setStartDate(new \DateTime($data['start']));
        $planning->setEndDate(new \DateTime($data['end']));
        // user
        $user = $userRepository->find($this->getUser()->getId());      
        // user and updateAt
        $planning->setUser($user);
        $planning->setUpdatedAt(new \DateTime());
        // save        
        $em = $managerRegistry->getManager();
        $em->persist($planning);
        $em->flush();               
        // return
        return $this->json($data);              
    }

    /**
     * @Route("/project/{id}/planning/{taskId}/progress", methods={"POST"}, name="planning_update_progress")
     */
    public function updateProgress(Request $request, $taskId, ManagerRegistry $managerRegistry, PlanningRepository $planningRepository, UserRepository $userRepository): Response
    {   
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        // task
        $planning = $planningRepository->findOneBy(['id' => $taskId]);         
        // data
        parse_str($request->getContent(), $data);         
        $planning->setPercentDone($data['progress']);  
        // user
        $user = $userRepository->find($this->getUser()->getId());      
        // user and updateAt
        $planning->setUser($user);
        $planning->setUpdatedAt(new \DateTime());      
        // save       
        $em = $managerRegistry->getManager();
        $em->persist($planning);
        $em->flush();
        // return
        return $this->json($data);
    }

    /**
     * @Route("/project/{id}/planning/{taskId}/comment", methods={"POST"}, name="planning_add_comment")
     */
    public function addComment(Request $request, $id, $taskId, ManagerRegistry $managerRegistry, ProjectRepository $projectRepository, PlanningRepository $planningRepository, UserRepository $userRepository): Response
    {   
        // data from body
        parse_str($request->getContent(), $data);       
        
        // project 
        $project = $projectRepository->findOneBy(['id' => $id]);     
        // planning
        $planning = $planningRepository->findOneBy(['id' => $taskId]);
        // user
        $user = $userRepository->find($this->getUser()->getId());

        // planning comment        
        $planning_comment = new PlanningComment();
        $planning_comment->setUser($user);
        $planning_comment->setProject($project);
        $planning_comment->setPlanning($planning);
        $planning_comment->setDate(new \DateTime());            
        $planning_comment->setComment($data['comment']);        

        // save       
        $em = $managerRegistry->getManager();
        $em->persist($planning_comment);
        $em->flush();
        // return
        return $this->json($data);
    }

    /**
     * @Route("/project/{id}/planning/{taskId}", methods={"DELETE"}, name="planning_delete")
     */
    public function delete($taskId, PlanningRepository $planningRepository, PlanningCommentRepository $planningCommentRepository): Response
    {      
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  
                
        // chercher dans table                 
        $planning = $planningRepository->findOneBy(['id' => $taskId]);  

        // delete       
        $entityManager = $this->getDoctrine()->getManager();        
        $entityManager->remove($planning);
        $entityManager->flush();       

        // response
        return $this->json(['status' => 'success']);       
    }

    /**
     * @Route("/project/{id}/planning/{taskId}/history", name="planning_history")
     */
    public function history($id, $taskId, Request $request, PlanningRepository $planningRepository, PlanningCommentRepository $planningCommentRepository): Response
    {
        //vérifie si y a un message suite à update ou nouvelle tâche
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));            
        
        $planning = $planningRepository->find($taskId);
        $comments = $planningCommentRepository->findAllById($taskId);

        return $this->render('planning/planning_history.html.twig', [
            'comments' => $comments,
            'name' => $planning->getName(),
            'projectId' => $id
         ]);
    }

}
