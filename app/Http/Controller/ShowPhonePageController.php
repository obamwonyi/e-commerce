<?php 
namespace App\Http\Controller;

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

        $connection = $factory->connect(require_once __DIR__ . "/../../Config/database.php");

        $products = $connection
                    ->query()
                    ->select()
                    ->from('products')
                    ->all();

        $item_details = $connection
                        ->query()
                        ->select() 
                        ->from("products")
                        ->where("id")
                        ->equal($id)
                        ->all();

        return view("$this->engineMainTemplate/mobile",
        [
            "id" => $id, 
            "products" => $products,
            "item_details" => $item_details,
        ]);
    }
    
}