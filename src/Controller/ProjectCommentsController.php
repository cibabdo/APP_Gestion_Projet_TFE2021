<?php

namespace App\Controller;

use DateTime;
use App\Entity\ProjectComment;
use App\Form\ProjectCommentType;
use App\Repository\UserRepository;
use App\Repository\ProjectRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ProjectAccessRepository;
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
    public function index(Request $request, $id, ProjectRepository $projectRepository, ProjectCommentRepository $projectCommentRepository, ProjectAccessRepository $projectAccessRepository): Response
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
    public function add(Request $request, $id, ProjectRepository $projectRepository, UserRepository $userRepository, ManagerRegistry $managerRegistry, ProjectAccessRepository $projectAccessRepository): Response
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
            // date et heure
            $projectComment->setDate(new DateTime());
            // instanciation DB de l'utilisateur
            $em = $managerRegistry->getManager();
            $em->persist($projectComment);
            $em->flush();
            // message            
            $this->addFlash('message', 'Commenaitre enregistré');
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
                                                              ProjectCommentRepository $projectCommentRepository, 
                                                              UserRepository $userRepository): Response
    {           
        $project = $projectRepository->find($id);
        $projectComment = $projectCommentRepository->findOneBy(['id' => $commentId]);

        $user = $userRepository->find($this->getUser()->getId());        
        if ($projectComment->getUser()->getId() != $user->getId()) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        $projectComment->setDate(new DateTime());
        $form = $this->createForm(ProjectCommentType::class, $projectComment);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { 
            // date et heure
            $projectComment->setDate(new DateTime());          
            // instanciation DB de l'utilisateur
            $em = $managerRegistry->getManager();
            $em->persist($projectComment);
            $em->flush();
            // message            
            $this->addFlash('message', 'Projet modifié');
            // redirection sur le projet edit et onglet commentaires
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
        // Vérification accès       
        if (($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_INTERNAL')) == false) 
            throw new AccessDeniedException('Vous ne pouvez plus modifier le commentaire');

        // cherche                 
        $projectComment = $projectCommentRepository->findOneBy(['id' => $commentId]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($projectComment);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
