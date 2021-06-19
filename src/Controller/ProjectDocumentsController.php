<?php

namespace App\Controller;

use App\Entity\Document;
use App\Form\DocumentType;
use App\Repository\ProjectRepository;
use Symfony\Component\Form\FormError;
use App\Repository\DocumentRepository;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ProjectDocumentsController extends AbstractController
{
    /**
     * @Route("/project/{id}/document", name="document_list")
     */
    public function index(Request $request, $id, ProjectRepository $projectRepository, DocumentRepository $documentRepository): Response
    {
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
    public function view($documentId, DocumentRepository $documentRepository): Response
    {   
        // as-tu accès à ce document ?
        // as-tu accès à ce projet ?
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
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        $project = $projectRepository->find($id);
        $document->setProject($project);        

        if ($form->isSubmitted() && $form->isValid()) {      
            $documentFile = $form->get('document')->getData();           
            if ($documentFile) {
                $originalFilename = pathinfo($documentFile->getClientOriginalName(), PATHINFO_FILENAME);               
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$documentFile->guessExtension();              
                try {
                    $documentFile->move(
                        $this->getParameter('documents_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                // update document                
                $document->setPath($this->getParameter('documents_directory'));
                $document->setFilename($newFilename);
                // save
                $em = $managerRegistry->getManager();
                $em->persist($document);
                $em->flush();
                // message            
                $this->addFlash('message', 'Document uploadé');
                // redirect
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
        // security
        /* 
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $this->denyAccessUnlessGranted('ROLE_USER_INTERNAL');
        */

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
