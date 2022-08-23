<?php 
namespace Framework\View\Engine;

use Framework\View\Manager;

trait HasManager 
{
    protected Manager $manager; 

    //sets the manager for the current instance of Engine using 
    //this trait. 
    public function setManager(Manager $manager):static 
    {
        $this->manager = $manager; 
        return $this;
    }
    
}