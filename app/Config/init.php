<?php 




//mysql host name 
define("DBHOST","localhost");

//mysql database name 
define("DBNAME","e_commerce");

//mysql user name 
define("DBUSER","admin");

//mysql password 
define("DBPASSWORD","666365356AdiN");

//setting an initial error page if a wrong url is passed 

//current url 
define("URL",$_SERVER["REQUEST_URI"]);

//current url method 
define("METHOD",$_SERVER["REQUEST_METHOD"]);


//building the routing system for the application 

$routes = 
[
    "GET" => 
    [
        "/"
    ]
    ];


//requiring the autoloader for loading all the classes 
require_once __DIR__ . "/../../vendor/autoload.php";


?>