<?php 
namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class BackupDBService
{
    private $DATABASE_URL;
    private $backup_file;
    private $backup_directory;    

    public function __construct(ContainerInterface $container) {
        $this->DATABASE_URL = $container->getParameter('database_url');   
        $this->backup_directory = $container->getParameter('backup_directory'); 
        $this->setFile();   
    } 

    public function getFile() {         
        return $this->backup_file;        
    }

    public function getCommand(): String {
        $tab = $this->getConnexionParams();               
        return "mysqldump --opt -h " . $tab['dbhost'] . " -u " . $tab['dbuser'] . " -p . " . $tab['dbpass'] . " " . $this->backup_file;    
    }

    private function setFile() {         
        $this->backup_file = $this->backup_directory . '/tfe' . date("Y-m-d-H-i-s") . '.sql';        
    }      
  
    private function getConnexionParams() {
        $i1 = strrpos($this->DATABASE_URL, "//");
        $i2 = strrpos($this->DATABASE_URL, "@");
        $i3 = strripos($this->DATABASE_URL, "/");
        $user_pass = substr($this->DATABASE_URL, $i1+2, ($i2-$i1-2));
        $tab = explode(":", $user_pass);
        $result['dbuser'] = $tab[0];
        $result['dbpass'] = $tab[1];
        $result['dbhost'] = substr($this->DATABASE_URL, $i3+1);        
        return $result;
    }
}