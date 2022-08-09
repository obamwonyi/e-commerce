<?php
namespace Framework\View\Engine;

class BasicEngine implements Engine
{
    public function render(string $filePath, array $data = []): string
    {
        $contents = file_get_contents($filePath);

        foreach($data as $key => $value) 
        {
            $contents = str_replace("{{$key}}",$value,$contents);
        }

        return $contents;
    }
}