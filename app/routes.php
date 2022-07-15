<?php 

use Framework\Routing\Router; 


return function(Router $router) 
{
    $router->add(
        "GET" , 
        "/home", 
        fn() => "welcome to the home page"
    );
}



?>