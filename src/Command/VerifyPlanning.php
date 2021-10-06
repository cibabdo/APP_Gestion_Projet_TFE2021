<?php

namespace App\Command;

use App\Service\PlanningService;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/*
* php app\console app:VerifyPlanning
*/

class VerifyPlanning extends Command {
    private $planningService;
    protected static $defaultDescription = "Permet d'envoyer un mail aux personnes d'un projet si le planning a changé";

    public function __construct(PlanningService $planningService)
    {
        $this->planningService = $planningService;
        parent::__construct();
    }

    protected function configure() {
        // On set le nom de la commande
        $this->setName('app:VerifyPlanning');      
        // On set l'aide
        $this->setHelp("Lancer la commande : symfony console app:VerifyPlanning");
    }

    protected function execute(InputInterface $input, OutputInterface $output) { 
        // exécuter un service
        $this->planningService->verifyPlanning();
        return Command::SUCCESS;
    }
}