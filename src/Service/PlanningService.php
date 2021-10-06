<?php 
namespace App\Service;

use App\Entity\ProjectPerson;
use App\Entity\PlanningComment;
use Symfony\Component\Mime\Email;
use App\Repository\ProjectPersonRepository;
use App\Repository\PlanningCommentRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class PlanningService
{    
    private $env;

    public function __construct(private ProjectPersonRepository $projectPersonRepository, private PlanningCommentRepository $planningCommentRepository, private MailerInterface $mailer, private  KernelInterface $kernel) { 
        $this->env = strtolower($kernel->getEnvironment());        
    } 

    public function verifyPlanning() {   
        $date = new \DateTime();     
        $date->setTime(0,0);        
        $comments = $this->planningCommentRepository->findNewComments($date);        
        foreach ($comments as $comment) {
            $persons = $this->projectPersonRepository->findAllById($comment->getProject()->getId());
            foreach ($persons as $person) {
                $this->sendMail($comment, $person);
            }
        }
    }     

    private function sendMail(PlanningComment $comment, ProjectPerson $person) {       
        $name = '';
        if ($person->getEmployee() != null) $name = $person->getEmployee()->getFirstname() . ' ' . $person->getEmployee()->getLastname();
        if ($person->getPersonEngineering() != null) $name = $person->getPersonEngineering()->getFirstname() . ' ' . $person->getPersonEngineering()->getLastname();        
        if ($name == '') return;

        $html  = '<p>Bonjour ' . $name . ', la tâche ' . $comment->getPlanning()->getName() . ' a été modifiée</p>';
        $html .= '<p>Début : ' . $comment->getPlanning()->getStartDate()->format('d-m-Y')  . '</p>';
        $html .= '<p>Fin : ' . $comment->getPlanning()->getEndDate()->format('d-m-Y') . '</p>';
        $html .= '<p>Pourcentage : ' . $comment->getPlanning()->getPercentDone() . ' %</p>';
        $html .= '<p>Commentaire : ' . $comment->getComment() . '</p>';  
        
        // to
        $to = $person->getEmployee() != null ? $person->getEmployee()->getEmail() : $person->getPersonEngineering()->getEmail();
        
        // sécurité mail en dev
        if ($this->env == 'dev') $to = 'donato.abiuso@gmail.com';       
        
        $email = (new Email())
        ->from('donato.abiuso@chuliege.be')
        ->to($to)
        ->subject('CHU - Projet ' . $comment->getProject()->getTitle() . ' - changement dans le planning')
        ->html($html);        
       
        $this->mailer->send($email);
    }
}