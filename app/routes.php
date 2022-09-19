<?php

use App\Http\Controller\FormControllers\AddToCartController;
use App\Http\Controller\ShowLandingPageController;
use App\Http\Controller\ShowPhonePageController;
use App\Http\Controller\FormControllers\LoginPageController;
use App\Http\Controller\FormControllers\LoginController;
use App\Http\Controller\FormControllers\SignupPageController;
use App\Http\Controller\FormControllers\SignupController;
use App\Http\Controller\FormControllers\LogoutUserController;
use App\Http\Controller\FormControllers\WishlistPageController;
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

    //cart page route handler 
    $router->add(
        "GET", 
        "/wishlist",
        [WishlistPageController::class,'handler', $router,$basicTemplates],
    );

    //cart page route handler 
    // $router->add(
    //     "GET",
    //     "/wishlist",
    //     [AddToCartPageController::class,'handler', $router,$basicTemplates],
    // );
    
    //router for handling the login page only 
    $router->add(
        "GET", 
        "/login", 
        [LoginPageController::class, 'handler', $router, $advancedTemplates],
    );
    //router for handling the login validation 
    $router->add(
        "POST", 
        "/login", 
        [LoginController::class,'handler', $router],
    );



    //router for handling the signup page only 
    $router->add(
        "GET", 
        "/signup", 
        [SignupPageController::class,"handler",$router,$advancedTemplates],
    )->name("show-sign-up-form");

    //router for handling the signup validation controller 
    $router->add(
        "POST", 
        "/signup", 
        [SignupController::class,"handler",$router],
    )->name("signup-user");


    //router for handling logout controller 
    $router->add(
        "GET", 
        "/logout", 
        [LogoutUserController::class,"handler", $router],
    );

    //router for adding an item to cart 
    $router->add(
        "POST", 
        "/addToCart", 
        [AddToCartController::class,"handler", $router],
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