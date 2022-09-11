<?php 

namespace Framework\Database\Connection;


use Framework\Database\QueryBuilder\QueryBuilder;
use PDO;

abstract class Connection 
{

    //responsible for the PDO instance 
    //for connecting to the Database . 
    abstract public function pdo():PDO;

    //start a new query 
    abstract public function query(): QueryBuilder;
}