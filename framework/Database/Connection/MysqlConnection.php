<?php 

namespace Framework\Database\Connection;

use Framework\Database\QueryBuilder\MysqlQueryBuilder;
use Framework\Database\QueryBuilder\QueryBuilder;
use InvalidArgumentException;
 
use PDO;

class MysqlConnection extends Connection
{
    private PDO $pdo; 

    public function __construct(array $config)
    {
        [
            "host" => $host, 
            "port" => $port, 
            "database" => $database, 
            "username" => $username, 
            "password" => $password
        ] = $config;

        if(empty($host) || empty($database) || empty($username))
        {
            throw new InvalidArgumentException("Connection incorrectly configured");
        }

        //actual connection to the database (a Mysql Database)
        $this->pdo = new PDO("mysql:host={$host};port={$port};dbname={$database}",
        $username, $password);
    }

    public function pdo():PDO 
    {
        return $this->pdo;
    }

    public function query(): QueryBuilder
    {
        //return an instance of the MysqlQueryBuilder 
        //passing this MysqlConnection as our connection . 
        return new MysqlQueryBuilder($this);
    }
}