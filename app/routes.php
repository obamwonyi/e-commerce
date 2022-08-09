<?php 
use Framework\Routing\Router;

return function(Router $router) 
{
    $router->add(
        "GET", 
        "/", 
        fn() => view("main",["name" => "Destiny"])
    );

    $router->add(
        "GET",
        "/has-server-error",
        fn() => $router->dispatchError()
    );

    $router->add(
        "GET", 
        "/has-validation-error", 
        fn() => $router->dispatchNotAllowed()
    );

    $router->add(
        "GET", 
        "/old-home",
        fn() => $router->redirect("/")
    );

    $router->add(
        "GET", 
        "/product/view/{product}", 
        function() use ($router) 
        {
            $parameters = $router->current()->parameters();

            return $parameters['product'];
        }
    );

    $router->add(
        "GET", 
        "/service/view/{service?}", 
        function() use ($router) 
        {
            $parameters = $router->current()->parameters();

            //if there is no service parameter 
            //return all service 
            if(empty($parameters['service'])) 
            {
                return "all service";
            }

            return $parameters["service"];
        }
    );

    $router->add(
        "GET",
        "/product/{page?}",
        function() use ($router) 
        {
            $parameters = $router->current()->parameters();
            $parameters["page"] ??= 1;
            return $parameters["product-list"];
        }

    )->name("product-list");
};