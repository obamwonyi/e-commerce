<?php
namespace Framework\View\Engine;

class BasicEngine implements Engine
{
    protected $basicTemplates = __DIR__ . "/../../../resource/view/templates/basic_templates";
    protected $extension = "basic.php";
    protected $templateIdentifier = "@{template}@";
    
    public function render(string $filePath,string $page, array $data = []): string
    {
        $pagePath = "{$this->basicTemplates}/{$page}.{$this->extension}";
        $file = file_get_contents($pagePath);
        $contents = file_get_contents($filePath);
        $contents = str_replace($this->templateIdentifier,$file,$contents);

        foreach($data as $key => $value) 
        {
            $contents = str_replace("{{$key}}",$value,$contents);
        }
    
        return $contents;
    }
}