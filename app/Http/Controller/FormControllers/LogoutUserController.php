<?php 
namespace App\Http\Controller\FormControllers;


use Framework\Routing\Router;
use App\Models\User;


class LogoutUserController 
{
    protected Router $router; 

    public function __construct(Router $router)
    {
        $this->router = $router;
    }


    public function handler() 
    {

        session_destroy();

        return redirect("/");

    }
}