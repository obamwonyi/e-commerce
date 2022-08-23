<?php 
namespace Framework\View\Engine;

use Framework\View\View;

class PhpEngine implements Engine 
{
    use HasManager ; 

    protected $layouts = []; 

    public function render(View $view): string
    {
       extract($view->data);
       ob_start();
       include($view->path);
       $contents = ob_get_clean();

       if($layout = $this->layouts[realpath($view->path)] ?? null)
       {
            $contentsWithLayout = view($layout,array_merge(
                $view->data,
                ["contents" => $contents]
            ));
            return $contentsWithLayout;
       }
       return $contents;
    }


    public function extends(string $template)
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1);
        $this->layouts[realpath($backtrace[0]['file'])] = $template;
        return $this;
    }


    public function __call($name, $values)
    {
        return $this->manager->useMacro($name,...$values);
    }
}

/*
        $layouts = $this->layouts[$view->path] ?? null ; 
        
        if($layouts)
        {
            $layoutContents = view($layouts,[]);
        }
        extract($view->data);
        ob_start(); 
        include($view->path);
        $contents = ob_get_clean();

        $contents = str_replace("@{template}@",$layoutContents,$contents);

        
        return $contents;
*/