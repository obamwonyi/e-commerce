<?php 

namespace Framework\Routing;


class Route 
{

    protected string $method; 
    protected string $path; 
    protected $handler;

    public function __construct(string $method,string $path,$handler) 
    {
        $this->method = $method; 
        $this->path = $path;
        $this->handler = $handler;
    }

    public function method() 
    {
        return $this->method;
    }

    public function path() 
    {
        return $this->path; 
    }


    public function matches($method, $path) 
    {
        return $this->method === $method && $this->path === $path;
    }

    public function dispatch() 
    {
        return call_user_func($this->handler);
    }
    
}





?>