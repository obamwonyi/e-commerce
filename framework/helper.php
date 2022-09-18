<?php

use Framework\View\Engine\AdvancedEngine;
use Framework\View\Engine\BasicEngine;
use Framework\View\Engine\PhpEngine;
use Framework\View\Manager;

use Framework\Validation;

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

if(!function_exists("redirect"))
{
    function redirect(string $url) 
    {
        header("Location: {$url}");
        exit;
    }
}


if(!function_exists("validate"))
{
    function validate(array $data, array $rules) 
    {
        static $manager; 

        if(!$manager) 
        {

            $manager = new Validation\Manager();
            $manager->addRule('required', new Validation\Rule\RequiredRule());
            $manager->addRule('email', new Validation\Rule\EmailRule());
            //$manager->addRule('password',new Validation\Rule\PasswordRule());
            $manager->addRule('min', new Validation\Rule\MinRule());
            $manager->addRule('email_login',new Validation\Rule\EmailLoginRule());
            $manager->addRule("password", new  Validation\Rule\PasswordRule());

        }

        return $manager->validate($data,$rules);
    }


    if(!function_exists('csrf'))
    {
        function csrf() 
        {
            $_SESSION["token"] = bin2hex(random_bytes(32));
            return $_SESSION['token'];
        }
    }


    if(!function_exists('secure'))
    {
        function secure() 
        {
            if(!isset($_POST['csrf']) || !isset($_SESSION['token']) ||
             !hash_equals($_SESSION["token"],$_POST["csrf"]))
             {
                throw new Exception("CSRF token mismatch");
             }
        }
    }

    
    if (!function_exists('dd')) {
        function dd(...$params)
        {
            var_dump(...$params);
            die;
        }
    }
    
    if (!function_exists('basePath')) {
        function basePath(string $newBasePath = null): ?string
        {
            static $basePath;
    
            if (!is_null($newBasePath)) {
                $basePath = $newBasePath;
            }
    
            return $basePath;
        }
    }


}