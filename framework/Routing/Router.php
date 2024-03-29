<?php 

namespace Framework\Routing;

//use Dotenv\Exception\ValidationException;

use Framework\Validation\ValidationException;


use FFI\Exception;

use Throwable;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

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
        http_response_code(500);
        return $this->errorHandlers[500]();
    }

    public function dispatchNotAllowed():string 
    {
        $this->errorHandlers[400] = fn() => "<h1 style=\"color:red\">There was a 400 error </h1>";
        http_response_code(400);
        return $this->errorHandlers[400]();
    }

    public function dispatchNotFound():string 
    {
        $this->errorHandlers[404] = fn() => "<h1 style=\"color:red\">There was a 404 error</h1>";
        http_response_code(404);
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

            $this->current = $matching;
            
            try
            {
                return $matching->dispatch();
            }
            catch(Throwable $e) 
            {

                //remember to implement this when we creat the validation . 
                
                if($e instanceof ValidationException) 
                {
                    $_SESSION['errors'] = $e->getErrors();
                    
                    return redirect($_SERVER["HTTP_REFERER"]);
                }
                

                //pretty page handler for local developement trouble shooting . 
                //and exception handling . 

                if(isset($_ENV["APP_ENV"]) && $_ENV["APP_ENV"] === "dev")
                {
                    $whoops = new Run();
                    $whoops->pushHandler(new PrettyPageHandler);
                    $whoops->register();
                    throw $e;
                }

                //if prettyPageHandler does not work then use the exception . 
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


    public function route(string $name, array $parameters = []) 
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