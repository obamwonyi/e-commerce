<?php 
namespace App\Http\Controller;

use Exception;
use Framework\Database\Connection\MysqlConnection;
use Framework\Routing\Router;

use Framework\Database\Factory;

class ShowPhonePageController
{



    protected Router $router; 

    protected string $engineMainTemplate;

    public function __construct(Router $router, $engineMainTemplate)
    {
        $this->router = $router;
        $this->engineMainTemplate = $engineMainTemplate;
    }


    public function handler()
    {





        $parameters = $this->router->current()->parameters();
        $id = $parameters["id"];


        $factory = new Factory(); 

        $factory->addConnector("mysql", function($config) 
        {
            return new MysqlConnection($config);
        });

        $connection = $factory->connect(include_once __DIR__ . "/../../Config/database.php");

        $products = $connection
                    ->query()
                    ->select()
                    ->from('products')
                    ->all();

        $item_details = $connection
                        ->query()
                        ->select() 
                        ->from("products")
                        ->where("id","=","{$id}")
                        ->all();



        

        if(isset($_SESSION["loged_in"]))
        {
            $_SESSION["item_details"] = $item_details;
        }

        return view("$this->engineMainTemplate/mobile",
        [
            "id" => $id, 
            "products" => $products,
            "item_details" => $item_details,
        ]);
    }
    
}