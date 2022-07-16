<?php 

use Framework\Routing\Router; 


return function(Router $router) 
{
    $router->add(
        "GET" , 
        "/home", 
        fn() => "welcome to the home page"
    );


        $router->add(
        "GET", 
        "products/{page?}", 
        function() use ($router) 
        {
            $parameters = $router->current->parameters();
            $parameters["page"] ??= 1; 

            return "products for page {$parameters['page']}";
        }
    )->name("product-list");

}



?>