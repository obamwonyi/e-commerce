<?php 
namespace App\Http\Controller\FormControllers;


use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;

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


            $userEmail= $data['email'];


            $factory = new Factory(); 

            $factory->addConnector("mysql", function($config) 
            {
                return new MysqlConnection($config);
            });
    


            $connection = $factory->connect(require_once __DIR__ . "/../../../Config/database.php");


            //fetch all the items added to a cart by a particular use with the use of the email 
            $itemsInCart = $connection
            ->query()
            ->select() 
            ->from("cart")
            ->where("user_email","=","{$userEmail}")
            ->all();

            $numberOfCartItems = count($itemsInCart);
        
            $_SESSION["numberOfItems"] = $numberOfCartItems;

            $_SESSION["all_cart_items"] = $itemsInCart;


        $_SESSION["loged_in"] = true;


        return redirect("/");
    }
}