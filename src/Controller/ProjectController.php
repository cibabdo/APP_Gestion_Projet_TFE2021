<?php
namespace App\Controller;

use App\Entity\Project;
use App\Form\ProjectType;
use App\Repository\ProjectRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\PersonContactRepository;
use App\Repository\ProjectAccessRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController {  
     /**
     * @Route("/project", name="project_list")
     */
    public function index(Request $request, ProjectRepository $projectRepository, ProjectAccessRepository $projectAccessRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));    
        
        // for external person, see projects with access
        /*
        if ($this->isGranted('ROLE_EXTERNAL')) {
            $access = $projectAccessRepository->findAllWithAccess($this->getUser()->getId());
            $projects = $projectRepository->findAllIn();
        } 
        else {
            $projects = $projectRepository->findAll();
        }
        */
        $projects = $projectRepository->findAll();
        
        return $this->render('project/project.html.twig', [
            'projects' => $projects            
        ]);
    }

    /**
     * @Route("/project/search", name="project_search")
     */
    public function search(Request $request, ProjectRepository $projectRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $projects = $projectRepository->findAll();
        }
        else {
            $projects = $projectRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('project/project_list.html.twig', [
            'projects' => $projects
        ]);
    }

    /**
     * @Route("/project/new", name="project_new")
     */
    public function add(Request $request, PersonContactRepository $personContact, ManagerRegistry $managerRegistry): Response
    {
        $project = new Project();    
        $today = new \DateTime();
        $project->setYear($today->format('Y'));
        $project->setWorkStartDate(new \DateTime());
        $project->setWorkEndDate(new \DateTime('tomorrow'));

        /*
        $project->setEngineers($this->getChoices($personContact->findByRole(2)));            
        $project->setCoordinators($this->getChoices($personContact->findByRole(3)));            
        */
        $project->setEngineers($personContact->findByRole(2));
        $project->setCoordinators($personContact->findByRole(3));

        $form = $this->createForm(ProjectType::class, $project);               

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {               
            
            // save
            $em = $managerRegistry->getManager();
            $em->persist($project);
            $em->flush();
            // message            
            $this->addFlash('message', 'Projet enregistré');
            // redirect
            return $this->redirectToRoute('project_list');
        }       

        return $this->render('project/project_edit.html.twig', [
            'form' => $form->createView(),
            'name' => '',
            'id' => '0',
            'onglet' => ''
        ]);
    }

    /**
     * @Route("/project/{id}", methods={"GET","POST"}, name="project_edit")
     */
    public function update(Request $request, $id, PersonContactRepository $personContact, ManagerRegistry $managerRegistry, ProjectRepository $projectRepository): Response
    {     
        $project = $projectRepository->findOneBy(['id' => $id]);

        /*
        $project->setEngineers($this->getChoices($personContact->findByRole(2)));
        $project->setCoordinators($this->getChoices($personContact->findByRole(3)));
        */

        $project->setEngineers($personContact->findByRole(2));
        $project->setCoordinators($personContact->findByRole(3));

        $form = $this->createForm(ProjectType::class, $project);

        //dd($project);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {                       
            // save
            $em = $managerRegistry->getManager();
            $em->persist($project);
            $em->flush();
            // message            
            $this->addFlash('message', 'Projet modifié');
            // redirect
            return $this->redirectToRoute('project_list');
        }

        return $this->render('project/project_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => $project->getId(),
            'name' => $project->getTitle(),
            'onglet' => $request->query->get('onglet')
        ]);
    }

    /**
     * @Route("/project/{id}", methods={"DELETE"}, name="project_delete")
     */
    public function delete($id, ProjectRepository $projectRepository): Response
    {      
        // find                 
        $project = $projectRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($project);
        $entityManager->flush();  
        // delete documents on files disk        
        $documents = $project->getDocument();
        foreach($documents as $document) {
            unlink($document->getPath().'/'.$document->getFilename());
        }     
        // response
        return $this->json(['status' => 'success']);       
    }

    /*
    private function getChoices($rows) {
        $tab = array();
        foreach ($rows as $row) {   
            $tab[$row['firstname']] = $row['id'];            
        };  
        return $tab;
    }
    */
}
