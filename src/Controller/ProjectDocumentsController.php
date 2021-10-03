<?php

namespace App\Controller;

use App\Entity\Document;
use App\Form\DocumentType;
use App\Repository\ProjectRepository;
use Symfony\Component\Form\FormError;
use App\Repository\DocumentRepository;

use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ProjectAccessRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ProjectDocumentsController extends AbstractController
{
    /**
     * @Route("/project/{id}/document", name="document_list")
     */
    public function index(Request $request, $id, ProjectRepository $projectRepository, DocumentRepository $documentRepository, ProjectAccessRepository $projectAccessRepository): Response
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

        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $project = $projectRepository->find($id);
        $documents = $documentRepository->findAllByProjectId($id);
        //dd($documents);
        return $this->render('document/document.html.twig', [
            'documents' => $documents,
            'name' => $project->getTitle(),
            'projectId' => $id
        ]);
    }

     /**
     * @Route("/project/{id}/document/search", name="document_search")
     */
    public function search($id, Request $request, DocumentRepository $documentRepository): Response
    {           
        if ($request->query->get('str') == '') {
            $documents = $documentRepository->findAll();
        }
        else {
            $documents = $documentRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('document/document_list.html.twig', [
            'documents' => $documents,
            'projectId' => $id
        ]);
    }

    /**
     * @Route("/project/{id}/document/view/{documentId}", name="document_view")
     */
    public function view($id, $documentId, DocumentRepository $documentRepository, ProjectAccessRepository $projectAccessRepository): Response
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

        // get docmument
        $document = $documentRepository->find($documentId);
        $file = new File($document->getPath().'/'.$document->getFilename());
        //return $this->file($file);
        return $this->file($file, $document->getFilename(), ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @Route("/project/{id}/document/new", name="document_new")
     */
    public function add(Request $request, $id, ProjectRepository $projectRepository, SluggerInterface $slugger, ManagerRegistry $managerRegistry): Response
    {
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        //upload d'un nouveau document
        $document = new Document();
        //appelle du formulaire type
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        //On recupére l'id du projet
        $project = $projectRepository->find($id);
        $document->setProject($project);        

        //verification du forumulaire
        if ($form->isSubmitted() && $form->isValid()) {      
            //récuperation du document
            $documentFile = $form->get('document')->getData();           
            //vérification
            if ($documentFile) {
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
                // update document                
                $document->setPath($this->getParameter('documents_directory'));
                $document->setFilename($newFilename);
                // instanciation de la DB
                $em = $managerRegistry->getManager();
                $em->persist($document);
                $em->flush();
                // message            
                $this->addFlash('message', 'Document uploadé');
                // redirection
                //return $this->redirectToRoute('document_list', ['id' => $id]);
                return $this->redirectToRoute('project_edit', ['id' => $id, 'onglet' => 'document']);
            }      
            else {
                $form->get('document')->addError(new FormError("Uploader un document"));   
            }      
        }

        return $this->render('document/document_upload.html.twig', [
            'form' => $form->createView(),
            'name' => $project->getTitle(),
            'projectId' => $id
        ]);
    }

     /**
     * @Route("/project/{id}/document/{documentId}", methods={"DELETE"}, name="document_delete")
     */
    public function delete($id, $documentId, DocumentRepository $documentRepository): Response
    {     
        // Contrôle d'accès à vérifier        
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        // find                 
        $document = $documentRepository->findOneBy(['id' => $documentId]);        
        // delete on DB
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($document);
        $entityManager->flush();   
        // delete on disk
        unlink($document->getPath().'/'.$document->getFilename());
        // response
        return $this->json(['status' => 'success']);       
    }
}
