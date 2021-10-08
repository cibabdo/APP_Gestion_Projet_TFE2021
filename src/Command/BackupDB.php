<?php

namespace App\Command;

use App\Service\BackupDBService;

use Symfony\Component\Mime\Email;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/*
* php app\console app:backupDB
*/

class BackupDB extends Command {
    private $backupDBService;

    public function __construct(BackupDBService $backupDBService)
    {
        $this->backupDBService = $backupDBService;
        parent::__construct();
    }

    protected function configure() {
        // On set le nom de la commande
        $this->setName('app:backupDB');
        // On set la description
        $this->setDescription("Permet de lancer un backup de la DB");
        // On set l'aide
        $this->setHelp("Lancer la commande : php bin/console app:backupDB");
    }

    protected function execute(InputInterface $input, OutputInterface $output) { 
        // exécuter la commande du backup        
        $output->write($this->backupDBService->getCommand());
        echo $this->backupDBService->getCommand();
        /*     
        // envoi d'un mail avec la fichier sql         
        $html = '<p>Backup DB TFE</p>';
        $email = (new Email())
        ->from('donato.abiuso@chuliege.be')
        //->to('donato.abiuso@chuliege.be')         
        ->to('luigi_abiuso@hotmail.com')         
        ->subject('Backup DB TFE')            
        ->attachFromPath($this->backupDBService->getFile())
        ->html($html);

        $mailer = new MailerInterface();
        $mailer->send($email);     
        */  
    }

    
 
}