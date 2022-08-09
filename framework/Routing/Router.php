<?php 

namespace Framework\Routing;

use FFI\Exception;

use Throwable;

class Router
{
    protected array $routes = []; 
    protected array $errorHandlers = [];
    protected Route $current ; 


    public function add(string $method, string $path, $handler):Route 
    {
        $route = $this->routes[] = new Route($method,$path,$handler);
        $this->current = $route;
        return $route;
    }

    public function dispatchError():string
    {
        $this->errorHandlers[500] = fn() => "<h1 style =\"color:red\">There was a 500 error</h1>";
        return $this->errorHandlers[500]();
    }

    public function dispatchNotAllowed():string 
    {
        $this->errorHandlers[400] = fn() => "<h1 style=\"color:red\">There was a 400 error </h1>";
        return $this->errorHandlers[400]();
    }

    public function dispatchNotFound():string 
    {
        $this->errorHandlers[404] = fn() => "<h1 style=\"color:red\">There was a 404 error</h1>";
        return $this->errorHandlers[404]();
    }

    public function errorHandler(int $code, callable $handler):string
    {
        $this->errorHandlers[$code] = $handler;
        return $this->errorHandlers[$code]();
    }

    public function redirect(string $path) 
    {
        header("Location: {$path}", $replace=true, $code = 301);
        exit;
    }

    public function current() 
    {
        return $this->current;
    }

    public function dispatch()
    {
        $paths = $this->paths();
        $requestMethod = $_SERVER["REQUEST_METHOD"] ?? "GET";
        $requestPath = $_SERVER["REQUEST_URI"] ?? "/";

        $matching = $this->match($requestMethod,$requestPath);

        if($matching) 
        {
            try
            {
                return $matching->dispatch();
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

    private function match(string $method,string $path):?Route
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

    private function paths():array 
    {
        $paths = [] ; 
        foreach($this->routes as $route) 
        {
            $paths[] = $route->path();
        }
        return $paths; 
    }


    public function route(string $name, array $parameters) 
    {
        foreach($this->routes as $route) 
        {
            if($route->name() === $name)
            {
                $finds = []; 
                $replace = [];

                foreach($parameters as $key => $value) 
                {
                    array_push($finds,"{{$key}}");
                    array_push($replace,$value);
                    //we will also add for optional 
                    //parameters 
                    array_push($finds,"{{$key}?}");
                    array_push($replace,$value);
                }
                
                $path = $route->path(); 

                $path = str_replace($finds,$replace,$path);

                $path = preg_replace_callback("#{[^}]+}#","",$path);


            }
        }
        throw new Exception("no route with that name");
    }

}