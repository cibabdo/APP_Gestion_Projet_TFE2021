<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Form\PlanningType;
use App\Repository\ProjectRepository;
use Symfony\Component\Form\FormError;
use App\Repository\PlanningRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectPlanningController extends AbstractController
{
    /**
     * @Route("/project/{id}/planning", name="planning_list")
     */
    public function index($id, Request $request, PlanningRepository $planningRepository): Response
    {
        //vérifie si y a un message suite à update ou nouvelle tâche
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));                
        return $this->render('planning/planning.html.twig', [            
            'projectId' => $id
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
     * @Route("/project/{id}/planning/new", name="planning_new")
     */
    public function add($id, Request $request, ProjectRepository $projectRepository, PlanningRepository $planningRepository, UserRepository $userRepository, ManagerRegistry $managerRegistry): Response
    {
        //Contrôle d'accès à vérifier
        //$this->denyAccessUnlessGranted('ROLE_USER_INTERNAL');

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
        $form = $this->createForm(PlanningType::class, $planning);

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
    public function update(Request $request, $id, $taskId, ManagerRegistry $managerRegistry, PlanningRepository $planningRepository, UserRepository $userRepository): Response
    {
        $planning = $planningRepository->findOneBy(['id' => $taskId]);       

        $dependencies = $planningRepository->findAllWithoutMe($id, $taskId);
        $tab = array();
        $vals = array_values($dependencies);
        foreach ($vals as $obj) {                                    
            $tab[$obj['name']] = $obj['id'];
        };   
        $planning->setDependencies($tab); 

        $form = $this->createForm(PlanningType::class, $planning);

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

            // save
            $em = $managerRegistry->getManager();
            $em->persist($planning);
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
     * @Route("/project/{id}/planning/{taskId}", methods={"DELETE"}, name="planning_delete")
     */
    public function delete($taskId, PlanningRepository $planningRepository): Response
    {      
        // chercher dans table                 
        $planning = $planningRepository->findOneBy(['id' => $taskId]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($planning);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
