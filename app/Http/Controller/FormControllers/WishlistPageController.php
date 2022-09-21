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

        

        $factory = new Factory(); 

        $factory->addConnector("mysql", function($config) 
        {
            return new MysqlConnection($config);
        });


        //include __DIR__ . "/../../../Config/database.php";

        $connection = $factory->connect(include_once __DIR__ . "/../../../Config/database.php");

//^^^^-------------------re initializing all the items in cart -------------------------------

        $userEmail = $_SESSION["user_email"];
        $itemsInCart = $connection
        ->query()
        ->select() 
        ->from("cart")
        ->where("user_email","=","{$userEmail}")
        ->all();
        $_SESSION["all_cart_items"] = $itemsInCart;


        $all_cart_items = $_SESSION["all_cart_items"];

//vvvv------------------------------------------------------------------------------------------


//^^^^---------------loading up all the fetched items -------------------------------------
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

            $an_item[0]["product_id"] = $a_cart_item["product_id"];

            $all_fetched_items[] = $an_item;

        }  


        $_SESSION["all_fetched_items"] = $all_fetched_items;
//vvvv----------------------------------------------------------------------------------------------


//^^^^--------------------------calculating all the sum total -------------------------
        $sum_total_of_items = 0 ;
        //fetching the total amount of items in the cart . 
        foreach($all_fetched_items as $an_item)
        {
            $sum_total_of_items += $an_item[0]["product_price"];
        }

        $_SESSION["sum_total_of_items"] = $sum_total_of_items;


        $products = $connection
        ->query()
        ->select() 
        ->from('products')
        ->all();
//vvvv-------------------------------------------------------------------------------------------


//^^^^---------------------------------------number of cart items -----------------------
        $itemsInCart = $connection
        ->query()
        ->select() 
        ->from("cart")
        ->where("user_email","=","{$_SESSION["user_email"]}")
        ->all();
        $numberOfCartItems = count($itemsInCart);

        $_SESSION["numberOfItems"] = $numberOfCartItems;
//vvvv--------------------------------------------------------------------------------------

        // throw new Exception();



        return view("$this->engineMainTemplate/shopping_cart",
        [
            "products" => $products
        ]);
    }

}