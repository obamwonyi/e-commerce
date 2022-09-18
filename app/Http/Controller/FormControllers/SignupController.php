<?php 
namespace App\Http\Controller\FormControllers;


use Framework\Routing\Router;
use App\Models\User;


class SignupController 
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
                'name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required','min:10']
            ]
            );

            $user = new User();
            $user->name = $data["name"];
            $user->email = $data['email'];
            $user->password = password_hash($data["password"], PASSWORD_BCRYPT);
            $user->save();



            $_SESSION["registered"] = true; 

            //unset($_SESSION["token"]);

            return redirect("/");
    }
}