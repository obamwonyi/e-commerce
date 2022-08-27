<?php 
namespace App\Http\Controller;

use Framework\Routing\Router;

class ShowPhonePageController
{
    protected Router $router; 
    protected string $engineMainTemplate;

    public function __construct(Router $router, $engineMainTemplate)
    {
        $this->router = $router;
        $this->engineMainTemplate = $engineMainTemplate;
    }

    public function handler()
    {
        $parameters = $this->router->current()->parameters();
        $id = $parameters["id"];
        return view("$this->engineMainTemplate/mobile",["id" => $id]);
    }
    
}