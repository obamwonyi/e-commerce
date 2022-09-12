<?php 
namespace App\Http\Controller;

use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;

use Framework\Routing\Router;

class AddToCartPageController 
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

        $factory->addConnector("mysql",function($config)
        {
            return new MysqlConnection($config);
        });


        $parameters = $this->router->current()->parameters();
        $id = $parameters["id"];

        $connection = $factory->connect(require_once __DIR__ . "/../../Config/database.php");

                
        $item_details = $connection
        ->query()
        ->select() 
        ->from("products")
        ->where("id")
        ->equal($id)
        ->all();

        $products = $connection
        ->query()
        ->select() 
        ->from('products')
        ->all();



        return view("$this->engineMainTemplate/shopping_cart",
        [
            "id" => $id, 
            "item_details" => $item_details,
            "products" => $products,
        ]);

        


    }

}