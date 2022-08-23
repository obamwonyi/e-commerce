<?php 
namespace Framework\View\Engine;

use Framework\View\View;

class BasicEngine implements Engine 
{
    use HasManager;

    public function render(View $view):string
    {

        ob_start();
        include($view->path);
        $contents = ob_get_clean();

        foreach($view->data as $key => $value)
        {
            $contents = str_replace("{{$key}}", $value, $contents);
        }

        $mainContents = file_get_contents(__DIR__ . "/../../../resource/view/basic_main/main.basic.php");

        $mainContents = str_replace("@{template}@",$contents,$mainContents);

        return $mainContents; 
    }
}