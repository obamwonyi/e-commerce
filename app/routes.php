<?php 
use Framework\Routing\Router;

return function(Router $router) 
{
    $router->add(
        "GET", 
        "/", 
        fn() => view("main","landing_page",["name" => "Destiny Obamwonyi"])
    );

    $router->add(
        "GET", 
        "/phones/{id}",
        function() use ($router) 
        {
            $parameters = $router->current()->parameters();
            preg_match("#([0-9]+)#",$_SERVER["REQUEST_URI"],$match);
            $id = $match[1];
            return view("main","mobile",["id" => $id]);
        }
    );

    $router->add(
        "GET", 
        "/addtocart",
        function() use ($router) 
        {
            return view("main","shopping_cart");
        }
    );

    /*------------------codes for testing error handlers---------------*/
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
    /*----------------end of codes for testing error handlers------------*/

    /*---------------codes for testing named parameters------------------*/
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

    /*--------------------end of codes for testing named parameters------------*/
};