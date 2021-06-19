<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Form\PlanningType;
use App\Repository\ProjectRepository;
use App\Repository\PlanningRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectPlanningController extends AbstractController
{
    /**
     * @Route("/project/{id}/planning", name="planning_list")
     */
    public function index($id, Request $request, PlanningRepository $planningRepository): Response
    {
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
        $plannings = $planningRepository->findAllByProjectId($id);       

        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);  
        
        $tab = array();
        foreach ($plannings as $obj) { 
            if ($obj['dependency'] != null) {
                foreach ($plannings as $obj2) {                              
                    if ($obj['dependency'] == $obj2['id']) {
                        $obj['dependency'] = $obj2['name'];
                        break;
                    }
                };  
            }
            array_push($tab, $obj);
        };  

        $jsonContent = $serializer->normalize($tab, 'json');

        return $this->json($jsonContent);
    } 

    /**
     * @Route("/project/{id}/planning/search", name="planning_search")
     */
    public function search(Request $request, PlanningRepository $planningRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $plannings = $planningRepository->findAll();
        }
        else {
            $plannings = $planningRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('planning/planning_list.html.twig', [
            'plannings' => $plannings
        ]);
    }

    /**
     * @Route("/project/{id}/planning/new", name="planning_new")
     */
    public function add($id, Request $request, ProjectRepository $projectRepository, PlanningRepository $planningRepository, ManagerRegistry $managerRegistry): Response
    {
        //$this->denyAccessUnlessGranted('ROLE_USER_INTERNAL');

        $projet = $projectRepository->find($id);

        $dependencies = $planningRepository->findAllWithoutMe($id, 0);
        $tab = array();
        $vals = array_values($dependencies);
        foreach ($vals as $obj) {                                    
            $tab[$obj['name']] = $obj['id'];
        };      

        $planning = new Planning(); 
        $planning->setProject($projet);
        $planning->setStartDate(new \DateTime());
        $planning->setEndDate(new \DateTime('tomorrow'));   
        $planning->setDependencies($tab);
        $planning->setPercentDone(0);
        $form = $this->createForm(PlanningType::class, $planning);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
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
    public function update(Request $request, $id, $taskId, ManagerRegistry $managerRegistry, PlanningRepository $planningRepository): Response
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
        if ($form->isSubmitted() && $form->isValid()) {           
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
            'id' => $planning->getId(),
            'percentDone' => $planning->getPercentDone()
        ]);
    }

    /**
     * @Route("/project/{id}/planning/{taskId}", methods={"DELETE"}, name="planning_delete")
     */
    public function delete($taskId, PlanningRepository $planningRepository): Response
    {      
        // find                 
        $planning = $planningRepository->findOneBy(['id' => $taskId]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($planning);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
