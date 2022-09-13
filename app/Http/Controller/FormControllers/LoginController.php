<?php 
namespace App\Http\Controller\FormControllers;


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


        
        $data = validate(
            $_POST, 
            [
                'email' => ['required', 'email_login'],
                'password' => ['required','password']
            ]
            );

            echo "<pre>";
            print_r($data);
            echo "<pre>";


            // use $data to create a database record

            // $_SESSION["registered"] = true; 

            // return redirect("/");
    }
}