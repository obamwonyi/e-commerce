<?php 


namespace Framework\Routing;

use Throwable;

class Router 
{
    //to hold all the routing instance (for the Route class) 
    //as an indexed array 
    protected array $routes = [];

    //to hold all the error handling methods 
    //with the methods stored in the array using status error code as their 
    //index (an associative array ) 
    protected array $errorHandlers = []; 


    //add an instance of the Route class to the $routes array 
    //this should be instanciated with the method , path and callable 
    //passed to the add(__,__,__) method , 
    public function add(string $methods, string $path, $handler)
    {
        $route = $this->routes[] = new Route($methods,$path, $handler);
        return $route;
    } 

    public function dispatch()
    {
        //store all the available routes that has 
        //been created from all the instance 
        //passed with the add(__,__,__) method .
        $paths = $this->paths(); 

        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $requestPath = $_SERVER["REQUEST_URI"];

        $matches = $this->matching($requestMethod, $requestPath);

        if($matches) 
        {
            try 
            {
                return $matches->dispatch();
            }
            catch(Throwable $e) 
            {
                return $this->dispatchError(); 
            }
        }

        if(in_array($requestPath,$paths)) 
        {
            return $this->dispatchNotAllowed();
        }

        return $this->dispatchNotFound();
    }

    public function dispatchNotFound() 
    {
        $this->errorHandlers[404] ??= fn() => "404 error (not found)";
        return $this->errorHandlers[404]();
    }

    public function dispatchNotAllowed() 
    {
        $this->errorHandlers[400] ??=fn() => "400 error (bad request)";
        return $this->errorHandlers[400]();
    }

    public function dispatchError()
    {
        $this->errorHandlers[500] ??= fn() => "500 error (server error)";
        return $this->errorHandlers[500]();
    }



    //rememeber this method was initially called match but for 
    //in built syntax reasons was converted to matching  .
    private function matching(string $method, string $path) : ?Route  
    {
        foreach($this->routes as $route) 
        {
            if($route->matches($method,$path)) 
            {
                return $route; 
            }
        }
        
        return null;   
    }

    
    public function paths()
    {
        $paths = [];
        foreach($this->routes as $route) 
        {
            $paths[] = $route->path();
        }

        return $paths;
    }

    public function errorHandler(string $code , callable $handler) 
    {
        $this->errorHandlers[$code] = $handler ; 
        return $this->errorHandlers[$code]();
    }

    public function redirect(string $path) 
    {
        header("Location {$path}", $replace=true, $http_response_code = 301);
        exit;
    }

}



?>