<?php 

namespace Framework\Database;

//we will make use of a closure 
use Closure; 
//the connection class is an abstract class 
//the the MysqlConnection and other connecton (fore other database) 
//will extend and build on . 
use Framework\Database\Connection\Connection;
//this is an exection to be thrown when there is 
//any form of error related to the connection 
use Framework\Database\Exception\ConnectionException;

//note the factory class  is responsible for connecting to the 
//database . 
class Factory 
{
    //an array that will store all our connectors
    //that will be added as a closure by the addConnector method . 
    protected array $connector; 

    //adds a connector as a closure to the protected $connector property 
    //in form of an associative array [$alias] => Closure $connector 
    public function addConnector(string $alias, Closure $connector): static 
    {
        $this->connectors[$alias] = $connector; 
        return $this; 
    }


    public function connect(array $config): Connection 
    {
        if(!isset($config["type"]))
        {
            throw new ConnectionException("type is not defined");
        }

        $type = $config["type"];

        if(isset($this->connectors[$type]))
        {
            return $this->connectors[$type]($config);
        }

        throw new ConnectionException("unrecognised type");
    }

}