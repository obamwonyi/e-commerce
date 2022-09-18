<?php 
namespace Framework\Database\Migration\Field;

class DateTimeField extends Field 
{
    public ?string $default = null; 

    //simply set the default property 
    public function default(string $value):static 
    {
        $this->default = $value; 
        return $this;
    }
}