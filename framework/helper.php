<?php

use Framework\View\Engine\BasicEngine;
use Framework\View\Manager;

if(!function_exists("view"))
{

    //adding the page to be replaced when a @{page}@ is found
    function view(string $template,$page, array $data = []):string 
    {
        static $manager; 
        if(!$manager) 
        {
            $manager = new Manager();

            $manager->addPath(__DIR__. "/../resource/view");

            $manager->addEngine("basic.php",new BasicEngine());
        }

        return $manager->render($template,$page,$data);
    }
}