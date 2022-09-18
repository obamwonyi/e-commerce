<?php 
namespace Framework\View\Engine;

use Framework\View\View;

class AdvancedEngine implements Engine 
{
    protected array $layouts = []; 

    use HasManager;

    public function render(View $view): string
    {
        //creating the hash of the $view-path string 
        $hash = md5($view->path);
        //storing our storage path to dump contents
        $found =__DIR__ . "/../../../storage/view";

        //if hashed file does not exist create one .
        if(!is_file("{$found}/{$hash}.php"))
        {
            touch("{$found}/{$hash}.php");
        }

        //storing the path to our created hash file as
        // a cached(saved for future use) file. 
        $cached = realpath("{$found}/{$hash}.php");

        if(!file_exists($hash) || filemtime($view->path) > filemtime($hash))
        {
            $contents = $this->compile(file_get_contents(realpath($view->path)));
            file_put_contents($cached,$contents);
        }

        extract($view->data);

        ob_start();
        include($cached);
        $contents = ob_get_clean();
        //ob_end_clean();

        if($layouts = $this->layouts[realpath($cached)] ?? null)
        {
            $contentsWithLayout = view($layouts,array_merge(
                $view->data, 
                ["contents" => $contents]
            ));
            return $contentsWithLayout; 
        }
        return $contents; 
    }

    protected function compile(string $template): string
    {
        //1 replace `@extends` with `$this->extends`
        $template = preg_replace_callback('#@extends\(((?<=\().*(?=\)))\)#', function($matches) {
            return '<?php $this->extends(' . $matches[1] . '); ?>';
        }, $template);

        //2 replace `@if` with `if(...):`
        $template = preg_replace_callback('#@if\(((?<=\().*(?=\)))\)#', function($matches) {
            return '<?php if(' . $matches[1] . '): ?>';
        }, $template);

        //3 replace `@endif` with `endif;`
        $template = preg_replace_callback('#@endif#', function($matches) {
            return '<?php endif; ?>';
        }, $template);

        //4 replace `@foreach` with `foreach(...):`
        $template = preg_replace_callback('#@foreach\(((?<=\().*(?=\)))\)#', function($matches) {
            return '<?php foreach(' . $matches[1] . '): ?>';
        }, $template);

        //5 replace `@endforeach` with `endforeach;`
        $template = preg_replace_callback('#@endforeach#', function($matches) {
            return '<?php endforeach; ?>';
        }, $template);

        //6 replace `@[anything](...)` with `$this->[anything](...)`
        $template = preg_replace_callback('#@([^(]+)\(((?<=\().*(?=\)))\)#', function($matches) {
            return '<?php $this->' . $matches[1] . '(' . $matches[2] . '); ?>';
        }, $template);

         //7 replace `{{ ... }}` with `print $this->escape(...)`
        $template = preg_replace_callback('#\{\{([^}]*)\}\}#', function($matches) {
            return '<?php print $this->escape(' . $matches[1] . '); ?>';
        }, $template);

        //8 replace `{!! ... !!}` with `print ...`
        $template = preg_replace_callback('#\{!!([^}]+)!!\}#', function($matches) {
            return '<?php print ' . $matches[1] . '; ?>';
        }, $template);

        return $template;
    }


    public function escape($value)
    {
        return htmlspecialchars($value,ENT_QUOTES);
    }

    protected function extends(string $template):static
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1);
        $this->layouts[realpath($backtrace[0]['file'])] = $template; 
        return $this;
    }

    public function __call($name, $arguments)
    {
        $this->manager->useMacro($name, ...$arguments);
    }
    
}