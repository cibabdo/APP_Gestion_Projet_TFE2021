<?php

namespace App\Command;

use Symfony\Component\Mime\Email;

use Symfony\Component\Mailer\MailerInterface;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/*
* php app\console app:backupDB
*/

class BackupDB extends Command {

    private $databaseUrl;

    protected function configure() {
        
        //$this->databaseUrl = $this->getParameter('databaseUrl');       

        // On set le nom de la commande
        $this->setName('app:backupDB');

        // On set la description
        $this->setDescription("Permet de lancer un backup de la DB");

        // On set l'aide
        $this->setHelp("Lancer la commande : php bin/console app:backupDB");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {  
        // générer le fichier sql du bakcup              
        $backup_file = 'tfe' . date("Y-m-d-H-i-s") . '.sql';
        /*
        $command = "mysqldump --opt -h " . $dbhost . " -u " . $dbuser . " -p . " . $dbpass . " " . $backup_file;
        */

        echo $this->databaseUrl;
        return;
        
        /*
        // exécuter la commande du backup
        $output->exec($command);
        */

        // envoi d'un mail avec la fichier sql         
        $html = '<p>Backup DB TFE</p>';
        $email = (new Email())
        ->from('donato.abiuso@chuliege.be')
        ->to('donato.abiuso@chuliege.be')         
        ->subject('Backup DB TFE')            
        ->attachFromPath('/backup/' + $backup_file)
        ->html($html);

        $mailer = new MailerInterface();
        $mailer->send($email);
    }
}