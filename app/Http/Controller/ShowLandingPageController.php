<?php 

namespace App\Http\Controller;

use Framework\Routing\Router;

class ShowLandingPageController 
{
    protected Router $router; 
    protected string $engineMainTemplate;

    public function __construct(Router $router, $engineMainTemplate)
    {
        $this->router = $router; 
        $this->engineMainTemplate = $engineMainTemplate;
    }
    //handle the route 
    public function handler() 
    {
        return view("$this->engineMainTemplate/landing_page",["name" => "Destiny Obamwonyi"]);
    }
}