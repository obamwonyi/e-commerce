<?php 
namespace App\Http\Controller\FormControllers;


use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;

use App\Models\User;
use Exception;
use Framework\Routing\Router;


class RemoveCartItemController
{
    protected Router $router; 

    public function __construct(Router $router)
    {
        $this->router = $router;
    }


    public function handler() 
    {



        $id = $_POST["delete_cart_item_id"];

            $factory = new Factory(); 

            $factory->addConnector("mysql", function($config) 
            {
                return new MysqlConnection($config);
            });
    


            $connection = $factory->connect(require_once __DIR__ . "/../../../Config/database.php");


            //deleting the item from the cart 
            $connection->query()->from("cart")->where("product_id","=","{$id}")->take(1)->delete();




            $all_cart_items = $_SESSION["all_cart_items"];



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

    
    
            $sum_total_of_items = 0 ;
            //fetching the total amount of items in the cart . 
            foreach($all_fetched_items as $an_item)
            {
                $sum_total_of_items += $an_item[0]["product_price"];
            }
    
            $_SESSION["sum_total_of_items"] = $sum_total_of_items;

            //-------------------end of sumtotal fetching 


            //fetch all the items added to a cart by a particular use with the use of the email 
            $itemsInCart = $connection
            ->query()
            ->select() 
            ->from("cart")
            ->where("user_email","=","{$_SESSION["user_email"]}")
            ->all();

            $numberOfCartItems = count($itemsInCart);
        
            $_SESSION["numberOfItems"] = $numberOfCartItems;


            return redirect($_SERVER["HTTP_REFERER"]);
    }
}
