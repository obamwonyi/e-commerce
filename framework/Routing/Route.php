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

    public function matches(string $method, string $path) 
    {
        return $this->method === $method && $this->path === $path;
    }
}