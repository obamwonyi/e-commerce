<?php 

namespace App\Http\Controller\FormControllers; 


use Framework\Routing\Router;


class SignupPageController
{


    protected Router $router ; 

    protected string $engineMainTemplate;

    public function __construct(Router $router, string $engineMainTemplate)
    {
        $this->router = $router; 

        $this->engineMainTemplate = $engineMainTemplate;
    }


    public function handler() 
    {


        return view("$this->engineMainTemplate/signup",
        [
        ]);
    }
}