<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/*
* php app\console app:backupDB
*/

class BackupDB extends Command {

    protected function configure() {
        // On set le nom de la commande
        $this->setName('app:backupDB');

        // On set la description
        $this->setDescription("Permet de lancer un backup de la DB");

        // On set l'aide
        $this->setHelp("Lancer la commande app\console app:backupDB");        
    }

    public function execute(InputInterface $input, OutputInterface $output) {        
        $backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';
        $command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass ". "test_db | gzip > $backup_file";
        $output->exec($command);
    }
}