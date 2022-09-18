<?php 

namespace Framework\Database\Migration\Field; 

abstract class Field 
{
    public string $name; 
    public bool $nullable = false; 
    public bool $alter = false; 

    public function __construct(string $name)
    {
        //assigns a name to the instance of the class . 
        $this->name = $name;
    }

    //sets the nullable property to true when called. 
    public function nullable(): static 
    {
        $this->nullable = true; 
        return $this;
    }

    public function alter():static 
    {
        $this->alter = true; 
        return $this;
    }

}