<?php 
namespace App\Http\Controller\FormControllers;


use App\Models\User;
use Exception;
use Framework\Routing\Router;


class LoginController 
{
    protected Router $router; 

    public function __construct(Router $router)
    {
        $this->router = $router;
    }


    public function handler() 
    {


        //check for csrf token and matching
        secure();
        
        $data = validate(
            $_POST, 
            [
                'email' => ['required', 'email_login'],
                'password' => ['required','password']
            ]
            );

        $_SESSION["loged_in"] = true;

        return redirect("/");
    }
}