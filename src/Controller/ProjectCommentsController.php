<?php

namespace App\Controller;

use App\Entity\ProjectComment;
use App\Form\ProjectCommentType;
use App\Repository\UserRepository;
use App\Repository\ProjectRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ProjectCommentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ProjectCommentsController extends AbstractController
{
    /**
     * @Route("/project/{id}/comments", name="project_comments")
     */
    public function index(Request $request, $id, ProjectRepository $projectRepository, ProjectCommentRepository $projectCommentRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $project = $projectRepository->find($id);
        $comments = $projectCommentRepository->findAllById($id);
        //dd($comments);
        return $this->render('project_comments/project_comments.html.twig', [
            'comments' => $comments,
            'name' => $project->getTitle(),
            'id' => $id
        ]);
    }

    /**
     * @Route("/project/{id}/comments/new", name="project_comments_new")
     */
    public function add(Request $request, $id, ProjectRepository $projectRepository, UserRepository $userRepository, ManagerRegistry $managerRegistry): Response
    {
        $project = $projectRepository->find($id);

        $projectComment = new ProjectComment();    
        $projectComment->setDate(new \DateTime());        
        $projectComment->setProject($project);
        
        $user = $userRepository->find($this->getUser()->getId());        
        $projectComment->setUser($user);
        $form = $this->createForm(ProjectCommentType::class, $projectComment);       
        
        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {            
            // save
            $em = $managerRegistry->getManager();
            $em->persist($projectComment);
            $em->flush();
            // message            
            $this->addFlash('message', 'Commenaitre enregistr??');
            // redirect
            //return $this->redirectToRoute('project_comments', ['id' => $id]);
            return $this->redirectToRoute('project_edit', ['id' => $id, 'onglet' => 'comment']);
        }       

        return $this->render('project_comments/project_comments_edit.html.twig', [  
            'form' => $form->createView(),          
            'name' => $project->getTitle(),            
            'projectId' => $id,
            'id' => 0
        ]);
    }

    /**
     * @Route("/project/{id}/comments/{commentId}", methods={"GET","POST"}, name="project_comment_edit")
     */
    public function update(Request $request, $id, $commentId, ManagerRegistry $managerRegistry, 
                                                              ProjectRepository $projectRepository, 
                                                              ProjectCommentRepository $projectCommentRepository): Response
    {                
        if (($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_INTERNAL')) == false) 
            throw new AccessDeniedException('Vous ne pouvez plus modifier le commentaire');

        $project = $projectRepository->find($id);
        $projectComment = $projectCommentRepository->findOneBy(['id' => $commentId]);
        $form = $this->createForm(ProjectCommentType::class, $projectComment);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($projectComment);
            $em->flush();
            // message            
            $this->addFlash('message', 'Projet modifi??');
            // redirect
            //return $this->redirectToRoute('project_comments', ['id' => $id]);
            return $this->redirectToRoute('project_edit', ['id' => $id, 'onglet' => 'comment']);
        }

        return $this->render('project_comments/project_comments_edit.html.twig', [
            'form' => $form->createView(),          
            'name' => $project->getTitle(),            
            'projectId' => $id,
            'id' => $commentId
        ]);
    }

     /**
     * @Route("/project/{id}/comments/{commentId}", methods={"DELETE"}, name="project_comments_delete")
     */
    public function delete($id, $commentId, ProjectCommentRepository $projectCommentRepository): Response
    {      
        // find                 
        $projectComment = $projectCommentRepository->findOneBy(['id' => $commentId]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($projectComment);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
