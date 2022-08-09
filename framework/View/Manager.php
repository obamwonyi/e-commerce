<?php 
namespace Framework\View;

use Framework\View\Engine\Engine;

use Exception;

class Manager 
{
    protected array $engines = []; 
    protected array $paths = [];


    //push path into the array of paths 
    //then return the static instance. 
    public function addPath(string $path):static 
    {
        array_push($this->paths,$path);
        return $this;
    }

    //add an engine to the array of engines, where 
    //the extension act as keys to the engine values 
    //and then finally return the static instance once more. 
    public function addEngine(string $extension,Engine $engine):static 
    {
        $this->engines[$extension] = $engine;
        return $this;
    }

    public function render(string $template,$page, array $data):string 
    {
        foreach($this->engines as $extension => $engine) 
        {
            foreach($this->paths as $path)
            {
                $file = "{$path}/{$template}.{$extension}";
                if(is_file($file))
                {
                    return $engine->render($file,$page,$data);
                }
            }
        }

        throw new Exception("un able to run the template : {$file} . ");
    }
}