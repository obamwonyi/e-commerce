<?php 

namespace App\Http\Controller;

use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;
use Framework\Routing\Router;

class ShowLandingPageController 
{
    protected Router $router; 
    protected string $engineMainTemplate;

    public function __construct(Router $router, $engineMainTemplate)
    {
        $this->router = $router; 
        $this->engineMainTemplate = $engineMainTemplate;
    }
    //handle the route 
    public function handler() 
    {

        $factory = new Factory();

        $factory->addConnector("mysql",function($config)
        {
            return new MysqlConnection($config);
        });

        $connection = $factory->connect(require_once __DIR__ . "/../../Config/database.php");

            //this will fetch all the products and store it as 
            //an associative array in the $products variable 
            //then pass it to the view throw the parameters . 
            $product = $connection
                ->query()
                ->select() 
                ->from('products')
                ->all();

            $apple = $connection
                    ->query()
                    ->select()
                    ->from('products')
                    ->where("product_name")
                    ->like("Iphone")
                    ->all();

            $samsung = $connection
                    ->query()
                    ->select()
                    ->from('products')
                    ->where("product_name")
                    ->like("Samsung")
                    ->all();

            $redmi = $connection
                    ->query()
                    ->select()
                    ->from('products')
                    ->where("product_name")
                    ->like("Redmi")
                    ->all();


        return view(
            "$this->engineMainTemplate/landing_page",
        [
            "name" => "Destiny Obamwonyi",
            "products" => $product,
            "apple" => $apple,
            "redmi" => $redmi, 
            "samsung" => $samsung, 
        ]);
    }
}