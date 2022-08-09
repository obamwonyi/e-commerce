<?php 
namespace Framework\View\Engine;

interface Engine 
{
    public function render(string $filePath, array $data = []):string;
}