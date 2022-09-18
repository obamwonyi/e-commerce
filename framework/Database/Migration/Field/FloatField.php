<?php 

namespace Framework\Database\Migration\Field;

class FloatField extends Field 
{
    public ?float $default = null; 

    //sets the default property 
    public function default(float $value):static 
    {
        $this->default = $value;
        return $this;
    }
}