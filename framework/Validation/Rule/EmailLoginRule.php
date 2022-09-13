<?php 

namespace Framework\Validation\Rule;

use Exception;
use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;


class EmailLoginRule implements Rule 
{

    protected string $message = "please enter a valid email";
    
    public function validate(array $data, string $field, array $params)
    {
        if(empty($data[$field]))
        {
            return true;
        }

        if(filter_var($data[$field],FILTER_VALIDATE_EMAIL))
        {
            return true;
        }

        //if the execution continues then false will be our 
        //return statement 
        return false;
    }

    public function getMessage(array $data, string $field, array $params)
    {
        return $this->message;
    }
}