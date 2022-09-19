<?php 
namespace App\Http\Controller\FormControllers;

use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;

use Framework\Routing\Router;

class WishlistPageController
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
        
        return view("$this->engineMainTemplate/shopping_cart",
        [
        ]);
    }

}