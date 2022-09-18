<?php 
namespace Framework\View\Engine;

use Framework\View\View;

class BasicEngine implements Engine 
{
    use HasManager;

    public function render(View $view):string
    {

        extract($view->data);

        ob_start();
        include($view->path);
        $contents = ob_get_clean();

        ob_end_clean();
        
        foreach($view->data as $key => $value)
        {
            if(gettype($value) === "string") 
            {
                $contents = str_replace("{{$key}}", $value, $contents);
            }
            
        }

        if(isset($_SESSION["loged_in"]))
        {
            ob_start();
            include(__DIR__ . "/../../../resource/view/basic_main/main_login.basic.php");
            $mainContents = ob_get_clean();
            ob_end_clean();
        }
        else
        {
            ob_start();
            include(__DIR__ . "/../../../resource/view/basic_main/main.basic.php");
            $mainContents = ob_get_clean();
            ob_end_clean();
        }
        

        $mainContents = str_replace("@{template}@",$contents,$mainContents);

        return $mainContents; 
    }
}