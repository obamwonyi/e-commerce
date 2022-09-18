<?php 

namespace Framework\Database\Migration\Field;

use Framework\Database\Exception\MigrationException;

//the id field is not supposed to have a default value as the default value 
//is automatically given to it by mysql
class IdField extends Field 
{
    public function default() 
    {
        throw new MigrationException("ID fields cannot have a default value");
    }
}