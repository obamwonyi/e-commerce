<?php

use App\Http\Controller\ShowLandingPageController;
use App\Http\Controller\ShowPhonePageController;
use App\Http\Controller\AddToCartPageController;
use App\Http\Controller\FormControllers\LoginPageController;
use App\Http\Controller\FormControllers\SignupPageController;
use Framework\Routing\Router;

return function(Router $router) 
{
    $basicTemplates = "/templates/basic_templates";
    $phpTemplates = "/templates/php_templates";
    $advancedTemplates = "/templates/advanced_templates";


    $router->add(
        "GET", 
        "/", 
        [ShowLandingPageController::class,"handler",$router,$basicTemplates],
    );

    $router->add(
        "GET", 
        "/phones/{id}",
        [ShowPhonePageController::class,"handler",$router,$basicTemplates],
    );

    $router->add(
        "GET", 
        "/cart/{id}",
        [AddToCartPageController::class,'handler', $router,$basicTemplates],
    );
    
    $router->add(
        "GET", 
        "/login", 
        [LoginPageController::class, 'handler', $router, $advancedTemplates],
    );

    $router->add(
        "GET", 
        "/signup", 
        [SignupPageController::class,"handler",$router,$advancedTemplates],
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