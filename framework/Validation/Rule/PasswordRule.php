<?php 

namespace Framework\Validation\Rule;

use Exception;
use InvalidArgumentException;

use Framework\Database\Factory;

use Framework\Database\Connection\MysqlConnection;
use Throwable;

class PasswordRule implements Rule 
{
    public function validate(array $data, string $field, array $params)
    {
        if(empty($data[$field]))
        {
            return true; 
        }

        $email = $data['email']; 

        $factory = new Factory();

        $factory->addConnector("mysql", function($config)
        {
            return new MysqlConnection($config);
        });

        $connection = $factory->connect(require_once __DIR__ . "/../../../app/Config/database.php");

        $emailPassword = $connection
        ->query()
        ->select("password")
        ->from("users")
        ->where("email")
        ->equal($email)
        ->all();

        $passwordDatabaseValue =$emailPassword[0]["password"];

        $passwordFormValue = $data["password"]; 
        
        if(!isset($passwordDatabaseValue))
        {
            return false;
        }

        //hashing it here for the pupose of our demo before the migration comes
        //as the actual hashed value is what should be stored in the database 
        $hashedPassword = password_hash($passwordDatabaseValue,PASSWORD_BCRYPT);

        if(!(password_verify($passwordFormValue,$hashedPassword)))
        {
            return false;
        }

        return true;
    }

    public function getMessage(array $data, string $field, array $params)
    {
        return "Incorrect email, username or password.";
    }
}