<?php 
namespace App\Http\Controller\FormControllers;

use Exception;
use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;

use Framework\Database\Connection\Connection;

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

        

        $all_cart_items = $_SESSION["all_cart_items"];

        /* 
        Array ( 
        [0] => Array ( [id] => 1 [user_email] => victoria@gmail.com [product_id] =>2 [product_name] => [product_price] => ) 
        [1] => Array ( [id] => 2 [user_email] => victoria@gmail.com [product_id] =>1 [product_name] => [product_price] => )
        [2] => Array ( [id] => 3 [user_email] => victoria@gmail.com [product_id] => 1 [product_name] => Iphone 5 [product_price] => 700 )
        [3] => Array ( [id] => 4 [user_email] => victoria@gmail.com [product_id] => 2 [product_name] => Iphone 6 [product_price] => 750 )
        [4] => Array ( [id] => 5 [user_email] => victoria@gmail.com [product_id] => 4 [product_name] => Redmi Note [product_price] => 450 )
        [5] => Array ( [id] => 6 [user_email] => victoria@gmail.com [product_id] => 2 [product_name] => Iphone 6 [product_price] => 750 )
        [6] => Array ( [id] => 7 [user_email] => victoria@gmail.com [product_id] => 2 [product_name] => Iphone 6 [product_price] => 750 )
        [7] => Array ( [id] => 8 [user_email] => victoria@gmail.com [product_id] => 2 [product_name] => Iphone 6 [product_price] => 750 )
        [8] => Array ( [id] => 9 [user_email] => victoria@gmail.com [product_id] => 2 [product_name] => Iphone 6 [product_price] => 750 )
        [9] => Array ( [id] => 10 [user_email] => victoria@gmail.com [product_id] => 2 [product_name] => Iphone 6 [product_price] => 750 )
        [10] => Array ( [id] => 11 [user_email] => victoria@gmail.com [product_id] => 2 [product_name] => Iphone 6 [product_price] => 750 )
        [11] => Array ( [id] => 12 [user_email] => victoria@gmail.com [product_id] => 2 [product_name] => Iphone 6 [product_price] => 750 ) 
        )
        */



        $factory = new Factory(); 

        $factory->addConnector("mysql", function($config) 
        {
            return new MysqlConnection($config);
        });


        //include __DIR__ . "/../../../Config/database.php";

        $connection = $factory->connect(include_once __DIR__ . "/../../../Config/database.php");

        $all_fetched_items = []; 

        //fetching each value in the cart product_id 
        foreach($all_cart_items as $a_cart_item) 
        {

            $an_item = $connection
            ->query()
            ->select() 
            ->from("products")
            ->where("id","=","{$a_cart_item["product_id"]}")
            ->all();

            $all_fetched_items[] = $an_item;

        }


        $_SESSION["all_fetched_items"] = $all_fetched_items;


        // throw new Exception();



        return view("$this->engineMainTemplate/shopping_cart",
        [
        ]);
    }

}