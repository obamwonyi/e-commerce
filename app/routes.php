<?php 
use Framework\Routing\Router;

return function(Router $router) 
{
    $basicTemplates = "/templates/basic_templates";
    $phpTemplates = "/templates/php_templates";
    $advancedTemplates = "/templates/advanced_templates";


    $router->add(
        "GET", 
        "/", 
        fn() => view("$basicTemplates/landing_page",["name" => "Destiny Obamwonyi"])
    );

    $router->add(
        "GET", 
        "/phones/{id}",
        function() use ($router,$basicTemplates)
        {
            $parameters = $router->current()->parameters();
            $id = $parameters["id"];
            return view("$basicTemplates/mobile",["id" => $id]);
        }
    );




    //-------------demo of using the php engine --------------
    $router->add(
        "GET",
        "/php-home",
        fn() => view("$phpTemplates/products",[])
    );


    //---------------demo of using the advanced engine 
    $router->add(
        "GET",
        "/advanced-home",
        fn() => view("$advancedTemplates/products",[])
    );



};