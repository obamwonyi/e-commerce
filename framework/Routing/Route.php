<?php
namespace Framework\Routing;

class Route
{
    protected string $method; 
    protected string $path;
    protected mixed $handler;
    protected array $parameters = [];
    protected string $name ; 

    public function __construct(string $method,string $path,callable $handler)
    {
        $this->method = $method; 
        $this->path = $path; 
        $this->handler = $handler;
    }

    public function path(/*string $path*/) 
    {
        return $this->path;
    }

    public function method(/*string $method*/) 
    {
        return $this->method;
    }

    public function dispatch() 
    {
        return call_user_func($this->handler);
    }

    public function parameters() 
    {
        return $this->parameters;
    }

    public function name(string $name = null):?Route 
    {
        if($name) 
        {
            $this->name = $name; 
            return $this;
        }
        return $this->name;
    }

    public function matches(string $method, string $path):bool
    {
        if($this->method === $method && $this->path === $path) 
        {
            return true;
        }

        $parameterNames = []; 

        $pattern = $this->normalizePath($this->path);

        // echo "<pre>";
        // print_r($pattern);
        // echo "<pre>";

        $pattern = preg_replace_callback(
            "#{([^}]+)}#",
            function(array $found) use (&$parameterNames)
            {
                array_push($parameterNames,rtrim($found[1],"?"));
                if(str_ends_with($found[1],"?"))
                {
                    return "([^/]*)(?:/?)";
                }

                return "([^/]+)";
            },
            $pattern
        );

        if(!str_contains($pattern,"*") && !str_contains($pattern,"+"))
        {
            return false;
        }


        $parameterValues = [] ; 

        preg_match_all("#{$pattern}#",$this->normalizePath($path), $matches);

        if(count($matches[1]) > 0)
        {
            foreach($matches[1] as $value) 
            {
                $parameterValues [] = $value;
            }

            $emptyValues = array_fill(0,count($parameterNames),null);

            $parameterValues += $emptyValues;
    
            $this->parameters = array_combine($parameterNames,$parameterValues);

            return true;
        }

        return false;


    }

    public function normalizePath(string $path)
    {
        $path = trim($path,"/");
        $path = "/{$path}/";
        $path = preg_replace("/[\/]{2,}/","/",$path);
        return $path;
    }
}