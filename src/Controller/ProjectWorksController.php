<?php

namespace App\Controller;

use App\Entity\Document;
use App\Entity\ProjectWork;
use App\Form\ProjectWorkType;
use App\Repository\ProjectRepository;
use App\Repository\ProjectWorkRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ProjectWorksController extends AbstractController
{
    /**
     * @Route("/project/{projectId}/work", name="project_works_list")
     */
    public function index($projectId, Request $request, ProjectRepository $projectRepository, ProjectWorkRepository $projectWorkRepository): Response
    {
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
     * @Route("/project/{projectId}/work/new", name="project_works_new")
     */
    public function add($projectId, Request $request, ProjectRepository $projectRepository, ManagerRegistry $managerRegistry, SluggerInterface $slugger): Response
    {
        $project = $projectRepository->find($projectId);         

        $work = new ProjectWork(); 
        $work->setProject($project);        
        $form = $this->createForm(ProjectWorkType::class, $work);

        // form submit
        $form->handleRequest($request);        
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
        if ($form->isSubmitted() && $form->isValid()) {             
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
