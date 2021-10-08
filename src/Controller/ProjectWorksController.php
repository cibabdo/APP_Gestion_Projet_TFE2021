<?php

namespace App\Controller;

use App\Entity\Document;
use App\Entity\ProjectWork;
use App\Form\ProjectWorkType;
use App\Repository\ProjectRepository;
use Symfony\Component\Form\FormError;
use App\Repository\ProjectWorkRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ProjectAccessRepository;
use App\Repository\ProjectCompanyRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ProjectWorksController extends AbstractController
{
    /**
     * @Route("/project/{projectId}/work", name="project_works_list")
     */
    public function index($projectId, Request $request, ProjectRepository $projectRepository, ProjectWorkRepository $projectWorkRepository, ProjectAccessRepository $projectAccessRepository): Response
    {
        // pour personne externe, voir projets si accès              
        if ($this->isGranted('ROLE_EXTERNAL')) {
            $isAccess = false;            
            $access = $projectAccessRepository->findAllWithAccess($this->getUser()->getId());  
            foreach($access as $a) {
                if ($projectId == $a->getProject()->getId()) {
                    $isAccess = true;
                    break;
                }
            }             
            if (!$isAccess) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  
        }

        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));
        $project = $projectRepository->find($projectId);     
        $works = $projectWorkRepository->findAllById($projectId);           
        return $this->render('project_works/project_works.html.twig', [            
            'works' => $works,
            'name' => $project->getTitle(),            
            'projectId' => $projectId
        ]);
    }

    /**
     * @Route("/project/{projectId}/work/search", name="project_works_search")
     */
    public function search($projectId, Request $request, ProjectWorkRepository $projectWorkRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $works = $projectWorkRepository->findAll();
        }
        else {
            $works = $projectWorkRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('project_works/project_works_list.html.twig', [
            'works' => $works,
            'projectId' => $projectId
        ]);
    }

    /**
     * @Route("/project/{projectId}/work/{workId}/validForm", methods={"POST"}, name="work_valid_form")
     */
    public function validForm($projectId, Request $request, ValidatorInterface $validator,  ProjectRepository $projectRepository): Response
    {        
        $project = $projectRepository->find($projectId); 

        $projectWork = new ProjectWork();     
        $projectWork->setProject($project);      

        $form = $this->createForm(ProjectWorkType::class, $projectWork);   
        $form->handleRequest($request);        
        $errors = $validator->validate($projectWork);        
        return $this->json(['errors' => $errors]);
    }

    /**
     * @Route("/project/{projectId}/work/new", name="project_works_new")
     */
    public function add($projectId, Request $request, ProjectCompanyRepository $projectCompanyRepository, ProjectRepository $projectRepository, ManagerRegistry $managerRegistry, SluggerInterface $slugger): Response
    {
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        //dd($projectCompanyRepository->findCompanyByProject($projectId));

        $project = $projectRepository->find($projectId);         

        $work = new ProjectWork(); 
        $work->setProject($project);        
        $form = $this->createForm(ProjectWorkType::class, $work);

        // form submit
        $form->handleRequest($request);        

        // vérifier cohérence dates avec les dates de début et fin du projet
        if ($form->isSubmitted()) {            
            if ($work->getProvisionalReceptionDate() != null && $work->getProvisionalReceptionDate() < $project->getWorkStartDate()) {                
                $form->get('provisionalReceptionDate')->addError(new FormError('La date provisoire doit être postérieure ou égale à la date de début du projet'));   
            }
            if ($work->getFinalDeliveryDate() != null && $work->getFinalDeliveryDate() < $project->getWorkEndDate()) {                
                $form->get('finalDeliveryDate')->addError(new FormError('La date définitive doit être postérieure ou égale à la date de fin du projet'));   
            }
            if ($work->getVincotteReceptionDate() != null && $work->getVincotteReceptionDate() < $project->getWorkEndDate()) {                
                $form->get('vincotteReceptionDate')->addError(new FormError('La date réception vincotte doit être postérieure ou égale à la date de fin du projet'));   
            }
        }

        // form submit      
        if ($form->isSubmitted() && $form->isValid()) {                        
            // envoi de documents attachés aux travaux
            $documents = $form->get('documents')->getData();
            foreach($documents as $documentFile){     
                //on garde le path d'origine           
                $originalFilename = pathinfo($documentFile->getClientOriginalName(), PATHINFO_FILENAME);      
                //créer un slug ??   
                $safeFilename = $slugger->slug($originalFilename);
                //on lui donne un nom unique
                //amélioration possible vers le versionning
                $newFilename = $safeFilename.'-'.uniqid().'.'.$documentFile->guessExtension();              
                try {
                    $documentFile->move(
                        $this->getParameter('documents_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // todo la gestion des erreurs
                }
                $document = new Document();
                $document->setProject($project);        
                $document->setProjectWork($work);
                $document->setPath($this->getParameter('documents_directory'));
                $document->setFilename($newFilename);
                 // add document               
                $work->addDocument($document);
            }

            // instanciation de la DB
            $em = $managerRegistry->getManager();
            $em->persist($work);
            $em->flush();

            // message            
            $this->addFlash('message', 'Poste enregistrée');
            
            // redirect
            //return $this->redirectToRoute('project_works_list', ['projectId' => $projectId]);
            return $this->redirectToRoute('project_edit', ['id' => $projectId, 'onglet' => 'work']);
        }       

        return $this->render('project_works/project_works_edit.html.twig', [
            'form' => $form->createView(),            
            'name' => $project->getTitle(),
            'documents' => $work->getDocument(),
            'projectId' => $projectId,
            'workId' => 0,        
        ]);
    }

    /**
     * @Route("/project/{projectId}/work/{workId}", methods={"GET","POST"}, name="project_works_edit")
     */
    public function update(Request $request, $projectId, $workId, ManagerRegistry $managerRegistry, ProjectRepository $projectRepository,
                                                                                                    ProjectWorkRepository $projectWorkRepository,
                                                                                                    SluggerInterface $slugger): Response
    {
        $project = $projectRepository->find($projectId);

        $work = $projectWorkRepository->findOneBy(['id' => $workId]);           
        $form = $this->createForm(ProjectWorkType::class, $work);

        // form submit
        $form->handleRequest($request);

        // vérifier cohérence dates avec les dates de début et fin du projet
        if ($form->isSubmitted()) {            
            if ($work->getProvisionalReceptionDate() != null && $work->getProvisionalReceptionDate() < $project->getWorkStartDate()) {                
                $form->get('provisionalReceptionDate')->addError(new FormError('La date provisoire doit être postérieure ou égale à la date de début du projet'));   
            }
            if ($work->getFinalDeliveryDate() != null && $work->getFinalDeliveryDate() < $project->getWorkEndDate()) {                
                $form->get('finalDeliveryDate')->addError(new FormError('La date définitive doit être postérieure ou égale à la date de fin du projet'));   
            }
            if ($work->getVincotteReceptionDate() != null && $work->getVincotteReceptionDate() < $project->getWorkEndDate()) {                
                $form->get('vincotteReceptionDate')->addError(new FormError('La date réception vincotte doit être postérieure ou égale à la date de fin du projet'));   
            }
        }

        // form submit      
        if ($form->isSubmitted() && $form->isValid()) {   
            // Contrôle d'accès à vérifier        
            if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

            // documents
            $documents = $form->get('documents')->getData();
            foreach($documents as $documentFile){                
                $originalFilename = pathinfo($documentFile->getClientOriginalName(), PATHINFO_FILENAME);               
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$documentFile->guessExtension();              
                try {
                    $documentFile->move(
                        $this->getParameter('documents_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // todo la gestion des erreurs
                }
                $document = new Document();
                $document->setProject($project);        
                $document->setProjectWork($work);
                $document->setPath($this->getParameter('documents_directory'));
                $document->setFilename($newFilename);
                // ajout document               
                $work->addDocument($document);
            }

            // instanciation de la DB
            $em = $managerRegistry->getManager();
            $em->persist($work);
            $em->flush();
            
            // message            
            $this->addFlash('message', 'Poste modifié');
            // redirect
            //return $this->redirectToRoute('project_works_list', ['projectId' => $projectId]);
            return $this->redirectToRoute('project_edit', ['id' => $projectId, 'onglet' => 'work']);
        }

        return $this->render('project_works/project_works_edit.html.twig', [
            'form' => $form->createView(),        
            'name' => $project->getTitle(),
            'documents' => $work->getDocument(),  
            'workId' => $workId,
            'projectId' => $projectId
        ]);
    }

    /**
     * @Route("/project/{projectId}/work/{workId}", methods={"DELETE"}, name="project_works_delete")
     */
    public function delete($workId, ProjectWorkRepository $projectWorkRepository): Response
    {      
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  
        
        // find                 
        $work = $projectWorkRepository->findOneBy(['id' => $workId]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($work);
        $entityManager->flush();       
        // delete les fichiers 
        $documents = $work->getDocument();
        foreach($documents as $document) {
            $file = $document->getPath().'/'.$document->getFilename();
            if (file_exists($file)) unlink($file);            
        }
        // response
        return $this->json(['status' => 'success']);       
    }
}
