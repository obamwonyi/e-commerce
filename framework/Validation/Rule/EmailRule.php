<?php 

namespace Framework\Validation\Rule;

use Exception;
use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;


class EmailRule implements Rule 
{

    protected string $message = "please enter a valid email";
    
    public function validate(array $data, string $field, array $params)
    {
        if(empty($data[$field]))
        {
            return true;
        }

        $factory = new Factory();

        $factory->addConnector("mysql", function($config)
        {
            return new MysqlConnection($config);
        });

        $connection = $factory->connect(require_once __DIR__ . "/../../../app/Config/database.php");

        $allUsers = $connection
        ->query()
        ->select("email") 
        ->from("users")
        ->all();

        foreach($allUsers as $oneUser) 
        {
            if($oneUser["email"] === $data[$field])
            {
                $this->message = "the email has been taken";
                return false;
            }
        }

        // $_SESSION["database_data"] = $allUsers;
        // throw new Exception();

        //check if the emaill is valid then return true
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