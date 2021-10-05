<?php
namespace App\Controller;

use App\Entity\Project;
use App\Form\ProjectType;
use App\Entity\PersonContact;
use App\Entity\ProjectPerson;
use App\Repository\DocumentRepository;
use App\Repository\ProjectRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\PersonContactRepository;
use App\Repository\ProjectAccessRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ProjectController extends AbstractController {  
     /**
     * @Route("/project", name="project_list")
     */
    public function index(Request $request, ProjectRepository $projectRepository, ProjectAccessRepository $projectAccessRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));    
        
        // pour personne externe, voir projets si accès  
        $projects = [];      
        if ($this->isGranted('ROLE_EXTERNAL')) {
            $projects_w = [];
            $access = $projectAccessRepository->findAllWithAccess($this->getUser()->getId());  
            foreach($access as $a) {
                array_push($projects_w, $projectRepository->find($a->getProject()->getId()));
            }     
            if (count($projects_w) > 0) $projects = $projects_w;
        }   
        else {
            $projects = $projectRepository->findAll();
        }        
        
        return $this->render('project/project.html.twig', [
            'projects' => $projects            
        ]);
    }

    /**
     * @Route("/project/search", name="project_search")
     */
    public function search(Request $request, ProjectRepository $projectRepository, ProjectAccessRepository $projectAccessRepository): Response
    {   
        $projects = null;
        if ($request->query->get('str') == '') {
            // pour personne externe, voir projets si accès              
            if ($this->isGranted('ROLE_EXTERNAL')) {
                $projects_w = [];                
                $access = $projectAccessRepository->findAllWithAccess($this->getUser()->getId());  
                foreach($access as $a) {
                    array_push($projects_w, $projectRepository->find($a->getProject()->getId()));
                }    
                if (count($projects_w) > 0) $projects = $projects_w;              
            }   
            else {
                $projects = $projectRepository->findAll();
            }  
        }
        else {
            // pour personne externe, voir projets si accès             
            if ($this->isGranted('ROLE_EXTERNAL')) { 
                $projects_w = [];                       
                $access = $projectAccessRepository->findAllWithAccess($this->getUser()->getId());  
                foreach($access as $a) {
                    $result = $projectRepository->findByNameAndId($request->query->get('str'), $a->getProject()->getId());
                    if (count($result) > 0) array_push($projects_w, $result);
                }       
                if (count($projects_w) > 0) $projects = $projects_w;                
            }   
            else {
                $projects = $projectRepository->findByNameLike($request->query->get('str'));
            }             
        }        
        return $this->render('project/project_list.html.twig', [
            'projects' => $projects
        ]);
    }

    /**
     * @Route("/project/new", name="project_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        //Vérification des permissions
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé'); 

        $project = new Project();    
        $today = new \DateTime();
        $project->setYear($today->format('Y'));
        $project->setWorkStartDate(new \DateTime());
        $project->setWorkEndDate(new \DateTime('tomorrow'));            

        $form = $this->createForm(ProjectType::class, $project);               

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { 
            // add new persons (internal)
            $person = $this->getPerson('architect', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getArchitect());
                $project->addPerson($person);       
            }
            else {
                if ($project->getArchitect()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getArchitect())->setInput('architect'));  
            }
            
            $person = $this->getPerson('secondArchitect', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getSecondArchitect());
                $project->addPerson($person);
            }
            else {
                if ($project->getSecondArchitect()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getSecondArchitect())->setInput('secondArchitect'));  
            }

            $person = $this->getPerson('hvacEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getHvacEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getHvacEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getHvacEngineer())->setInput('hvacEngineer'));  
            }

            $person = $this->getPerson('lowVoltageEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getLowVoltageEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getLowVoltageEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getLowVoltageEngineer())->setInput('lowVoltageEngineer'));  
            }

            $person = $this->getPerson('medicalFluidEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getMedicalFluidEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getMedicalFluidEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getMedicalFluidEngineer())->setInput('medicalFluidEngineer'));  
            }

            $person = $this->getPerson('strongVoltageEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getStrongVoltageEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getStrongVoltageEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getStrongVoltageEngineer())->setInput('strongVoltageEngineer'));  
            }

            $person = $this->getPerson('supervisor', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getSupervisor());
                $project->addPerson($person);            
            }
            else {
                if ($project->getSupervisor()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getSupervisor())->setInput('supervisor'));  
            }

            $person = $this->getPerson('sanitaryEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getSanitaryEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getSanitaryEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getSanitaryEngineer())->setInput('sanitaryEngineer'));  
            }                   

            // add new persons (external)
            $person = $this->getPerson('externalArchitectureOffice', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getExternalArchitectureOffice());
                $project->addPerson($person);            
            }
            else {
                if ($project->getExternalArchitectureOffice()) $project->addPerson((new ProjectPerson())->setProject($project)->setPersonEngineering($project->getExternalArchitectureOffice())->setInput('externalArchitectureOffice'));  
            }  

            $person = $this->getPerson('externalEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getExternalEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getExternalEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setPersonEngineering($project->getExternalEngineer())->setInput('externalEngineer'));  
            }

            $person = $this->getPerson('safetyCoordinator', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getSafetyCoordinator());
                $project->addPerson($person);            
            }
            else {
                if ($project->getSafetyCoordinator()) $project->addPerson((new ProjectPerson())->setProject($project)->setPersonEngineering($project->getSafetyCoordinator())->setInput('safetyCoordinator'));  
            }              
            
            // update project
            $em = $managerRegistry->getManager();
            $em->persist($project);
            $em->flush();

            // message            
            $this->addFlash('message', 'Projet enregistré (n\'oubliez pas d\'inviter vos personnes externes si vous les avez modifiés)');

            // redirect
            return $this->redirectToRoute('project_edit', ['id' => $project->getId()]);
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
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, ProjectRepository $projectRepository, ProjectAccessRepository $projectAccessRepository): Response
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

        $project = $projectRepository->findOneBy(['id' => $id]);         
        
        // set new persons (internal)       
        $project->setArchitect($this->getPersonEmployee('architect', $project->getPersons()));
        $project->setSecondArchitect($this->getPersonEmployee('secondArchitect', $project->getPersons()));
        $project->setHvacEngineer($this->getPersonEmployee('hvacEngineer', $project->getPersons()));
        $project->setLowVoltageEngineer($this->getPersonEmployee('lowVoltageEngineer', $project->getPersons()));
        $project->setMedicalFluidEngineer($this->getPersonEmployee('medicalFluidEngineer', $project->getPersons()));
        $project->setStrongVoltageEngineer($this->getPersonEmployee('strongVoltageEngineer', $project->getPersons()));
        $project->setSupervisor($this->getPersonEmployee('supervisor', $project->getPersons()));
        $project->setSanitaryEngineer($this->getPersonEmployee('sanitaryEngineer', $project->getPersons()));

        // set new persons (external)       
        $project->setExternalArchitectureOffice($this->getPersonEngineer('externalArchitectureOffice', $project->getPersons()));
        $project->setExternalEngineer($this->getPersonEngineer('externalEngineer', $project->getPersons()));
        $project->setSafetyCoordinator($this->getPersonEngineer('safetyCoordinator', $project->getPersons()));
        
        $form = $this->createForm(ProjectType::class, $project);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // add new persons (internal)
            $person = $this->getPerson('architect', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getArchitect());
                $project->addPerson($person);       
            }
            else {
                if ($project->getArchitect()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getArchitect())->setInput('architect'));  
            }
            
            $person = $this->getPerson('secondArchitect', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getSecondArchitect());
                $project->addPerson($person);
            }
            else {
                if ($project->getSecondArchitect()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getSecondArchitect())->setInput('secondArchitect'));  
            }

            $person = $this->getPerson('hvacEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getHvacEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getHvacEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getHvacEngineer())->setInput('hvacEngineer'));  
            }

            $person = $this->getPerson('lowVoltageEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getLowVoltageEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getLowVoltageEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getLowVoltageEngineer())->setInput('lowVoltageEngineer'));  
            }

            $person = $this->getPerson('medicalFluidEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getMedicalFluidEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getMedicalFluidEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getMedicalFluidEngineer())->setInput('medicalFluidEngineer'));  
            }

            $person = $this->getPerson('strongVoltageEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getStrongVoltageEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getStrongVoltageEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getStrongVoltageEngineer())->setInput('strongVoltageEngineer'));  
            }

            $person = $this->getPerson('supervisor', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getSupervisor());
                $project->addPerson($person);            
            }
            else {
                if ($project->getSupervisor()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getSupervisor())->setInput('supervisor'));  
            }

            $person = $this->getPerson('sanitaryEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setEmployee($project->getSanitaryEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getSanitaryEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setEmployee($project->getSanitaryEngineer())->setInput('sanitaryEngineer'));  
            }                   

            // add new persons (external)
            $person = $this->getPerson('externalArchitectureOffice', $project->getPersons());
            if (isset($person)) {
                $person->setPersonEngineering($project->getExternalArchitectureOffice());
                $project->addPerson($person);            
            }
            else {
                if ($project->getExternalArchitectureOffice()) $project->addPerson((new ProjectPerson())->setProject($project)->setPersonEngineering($project->getExternalArchitectureOffice())->setInput('externalArchitectureOffice'));  
            }  

            $person = $this->getPerson('externalEngineer', $project->getPersons());
            if (isset($person)) {
                $person->setPersonEngineering($project->getExternalEngineer());
                $project->addPerson($person);            
            }
            else {
                if ($project->getExternalEngineer()) $project->addPerson((new ProjectPerson())->setProject($project)->setPersonEngineering($project->getExternalEngineer())->setInput('externalEngineer'));  
            }

            $person = $this->getPerson('safetyCoordinator', $project->getPersons());
            if (isset($person)) {
                $person->setPersonEngineering($project->getSafetyCoordinator());
                $project->addPerson($person);            
            }
            else {
                if ($project->getSafetyCoordinator()) $project->addPerson((new ProjectPerson())->setProject($project)->setPersonEngineering($project->getSafetyCoordinator())->setInput('safetyCoordinator'));  
            }
                       
            // update DB        
            $em = $managerRegistry->getManager();            
            $em->persist($project);
            $em->flush();

            // message            
            $this->addFlash('message', 'Projet modifié (n\'oubliez pas d\'inviter vos personnes externes si vous les avez modifiés)');
            
            // redirect
            return $this->redirectToRoute('project_edit', ['id' => $id]);
        }

        return $this->render('project/project_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => $project->getId(),
            'name' => $project->getTitle(),
            'onglet' => $request->query->get('onglet')
        ]);
    }

    private function getPerson(String $input, \Doctrine\Common\Collections\Collection $persons) {
        // \Doctrine\Common\Collections\ArrayCollection
        $GLOBALS['input'] = $input;
        $tab = $persons->filter(function($element) {
            return ($element->getInput() === $GLOBALS['input']);
        })->getValues();        
        if (count($tab) != 0) 
            return $tab[0];
        else
            return null;
    }

    private function getPersonEmployee(String $input, \Doctrine\Common\Collections\Collection $persons) {
        $person = $this->getPerson($input, $persons);
        if (isset($person)) return $person->getEmployee();
        return null;
    }

    private function getPersonEngineer(String $input, \Doctrine\Common\Collections\Collection $persons) {
        $person = $this->getPerson($input, $persons);
        if (isset($person)) return $person->getPersonEngineering();
        return null;
    }

    /**
     * @Route("/project/{id}", methods={"DELETE"}, name="project_delete")
     */
    public function delete($id, ProjectRepository $projectRepository, DocumentRepository $documentRepository): Response
    {      
        // security
        if ($this->isGranted('ROLE_EXTERNAL')) throw new AccessDeniedException('Vous n\'êtes pas autorisé');  

        // find                 
        $project = $projectRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($project);
        $entityManager->flush();  
        // delete documents on files disk        
        $documents = $documentRepository->getDocument();
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
