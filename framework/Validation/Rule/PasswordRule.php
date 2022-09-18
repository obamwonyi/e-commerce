<?php 

namespace Framework\Validation\Rule;

use App\Models\User;

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


        //this will return the values of the email if found 
        $user = User::where('email',"=", $data["email"])->first();


        $_SESSION["user"] = $user;

  
        //this was were we set the user sessions data 
        if ($user && password_verify($data[$field], $user->password)) {
            $_SESSION["user_id"] = $user->id;
            $_SESSION["user_name"] = $user->name;

            return true;
        }

        return false;
    }

    public function getMessage(array $data, string $field, array $params)
    {
        return "Incorrect email, username or password.";
    }
}