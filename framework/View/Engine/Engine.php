<?php 
namespace Framework\View\Engine;

interface Engine 
{
    
    public function render(string $filePath,string $page, array $data = []):string;
}