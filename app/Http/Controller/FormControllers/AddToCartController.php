<?php 
namespace App\Http\Controller\FormControllers;


use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;

use Framework\Database\Connection\Connection;

use Framework\Routing\Router;
use App\Models\AddToCart;
use App\Models\User;
use Exception;

class AddToCartController 
{
    protected Router $router; 

    public function __construct(Router $router)
    {
        $this->router = $router;
    }


    public function handler() 
    {




        $number_of_items = intval($_POST["number_of_items"]) ;



        //adding the data fetched to the database 
            $cart = new AddToCart();

            for($i = 0; $i < $number_of_items; $i++)
            {
                $cart->user_email = $_SESSION["user_email"];
                $cart->product_id = $_SESSION["item_details"][0]["id"];
                $cart->product_name = $_SESSION["item_details"][0]["product_name"];
                $cart->product_price = $_SESSION["item_details"][0]["product_price"];
                $cart->save();
            }




            $userEmail= $_SESSION["user_email"];


            $factory = new Factory(); 

            $factory->addConnector("mysql", function($config) 
            {
                return new MysqlConnection($config);
            });
    


            $connection = $factory->connect(include_once __DIR__ . "/../../../Config/database.php");


            //fetch all the items added to a cart by a particular use with the use of the email 
            $itemsInCart = $connection
            ->query()
            ->select() 
            ->from("cart")
            ->where("user_email","=","{$userEmail}")
            ->all();

            $_SESSION["all_cart_items"] = $itemsInCart;

            $numberOfCartItems = count($itemsInCart);
        
            $_SESSION["numberOfItems"] = $numberOfCartItems;

            //unset($_SESSION["token"]);
            return redirect($_SERVER["HTTP_REFERER"]);
    }
}