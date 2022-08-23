<?php 
namespace Framework\View;

use Closure;
use Exception;
use Framework\View\Engine\Engine;

class Manager 
{
    //store all the template engine 
    protected array $engines = []; 
    //store all the paths we need 
    protected array $paths = [];
    //store all macros(small function to handle other events )
    protected array $macros = []; 
    
    //adds the path to $this->paths
    public function addPath(string $path):static
    {
        array_push($this->paths,$path);
        return $this;
    }

    //adds an engine to $this->engines 
    public function addEngines(string $extension, Engine $engine):static
    {
        //assign the engine argument to the engine value . 
        $this->engines[$extension] = $engine; 
        //set this current instance of manager as its manager
        $this->engines[$extension]->setManager($this);
        return $this;
    }

    //resolve the view for rendering by each engine . 
    public function resolve(string $template, array $data = [])
    {
        foreach($this->engines as $extension => $engine)
        {
            foreach($this->paths as $path)
            {
                $file = "{$path}/{$template}.{$extension}";
                if(is_file($file))
                {
                    return new View($engine,realpath($file),$data);
                }
            }
        }

        throw new Exception("Unable to find engine for template : {$template}");
    }

    //add a macro 
    public function addMacro(string $name,Closure $closure):static 
    {
        $this->macros[$name] = $closure;
        return $this;
    }

    //use a macro 
    public function useMacro(string $name, ...$values):static 
    {
        if(isset($this->macros[$name]))
        {
            $bound = $this->macros[$name]->bindTo($this);
            return $bound(...$values);
        }

        throw new Exception("Unable to bind the macro : {$name}");
    }
}