<?php

use Framework\View\Engine\AdvancedEngine;
use Framework\View\Engine\BasicEngine;
use Framework\View\Engine\PhpEngine;
use Framework\View\Manager;

if(!function_exists("view"))
{
    function view(string $template, array $data =[])
    {
        static $manager ; 
        if(!$manager)
        {
            $manager = new Manager();

            $manager->addPath(__DIR__ . "/../resource/view/");

            //$manager->addPath(__DIR__ . "/../resource/view/templates/advanced_templates");
            $manager->addPath(__DIR__ . "/../resource/view/advanced_main");


            $manager->addEngines("basic.php",new BasicEngine());

            $manager->addEngines("php",new PhpEngine());

            $manager->addEngines("advanced.php", new AdvancedEngine());

            /* ------------could also add macro when needed -------------*/ 
        }
        return $manager->resolve($template,$data);
    }
}