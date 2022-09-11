<?php 
namespace Framework\Database\QueryBuilder;

use Framework\Database\Connection\Connection;
use Framework\Database\Exception\QueryException;
//the pdo class 
use PDO;

use PDOStatement;

abstract class QueryBuilder 
{
    protected string $type ; 
    protected string $columns;
    protected string $table; 
    protected mixed $equal;
    //to select using the where query 
    protected string $where; 
    //to implement the like for comperism
    protected string $like; 
    protected int $limit  ;
    protected int $offset;


    /*
    this will fetch the instance for the particular 
    connection we need .  
    */
    //abstract public function connection(): Connection;


    //this will fetch all the value in a particular 
    //table . 
    public function all(): array 
    {
        $statement = $this->prepare();
        $statement->execute();
        //will return our fetched value in an associative array 
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    //prepare a query for a paticular connection . 
    public function prepare(): PDOStatement
    {
        $query = "";

        if($this->type === "select")
        {
            $query = $this->compileSelect($query);
            $query = $this->compileWhere($query);
            $query = $this->compileLimit($query);
 
        }

        if(empty($query))
        {
            throw new QueryException("Unrecognised query type");
        }

        return $this->connection->pdo()->prepare($query);
    }

    //compile a select query with the columns and table
    //value 
    //note: it has a default column value of all(*) 
    public function compileSelect(string $query): string 
    {
        $query .= " SELECT {$this->columns} FROM {$this->table}";
        return $query;
    }

    protected function compileLimit(string $query):string 
    {
        if(isset($this->limit))
        {
            $query .=" LIMIT {$this->limit}";
        }

        //note the offset will be given a default value 
        //of 0 
        if(isset($this->offset))
        {
            $query .= " OFFSET {$this->offset}";
        }

        return $query;
    }
    protected function compileWhere(string $query):string 
    {
        if(isset($this->where))
        {
            $query .=" WHERE {$this->where}";
        }


        if(isset($this->equal))
        {
            $query .=" = {$this->equal}";
        }
        //note the offset will be given a default value 
        //of 0 
        if(isset($this->like))
        {
            $query .= " LIKE '%{$this->like}%' ";
        }

        return $query;
    }


    // public function one():array 
    // {
    //     $statement = $this->prepare();
    //     $statement->execute();
    //     return $statement->fetchAll(PDO::FETCH_ASSOC);
    // }

    //fetch the first row of any table . 
    public function first():array 
    {
        //note take here will set the limit and 
        //offset for this particular QueryBuilder instance . 
        $statement = $this->take(1)->prepare();
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    //sets the value for the current instance offset and limit value 
    //then return the static instance . 
    public function take(int $limit, int $offset = 0): static
    {
        $this->limit = $limit; 
        $this->offset = $offset; 
        return $this;
    }


    public function equal($value):static 
    {
        $this->equal = $value;
        return $this;
    }

    public function from(string $table):static 
    {
        $this->table = $table; 
        return $this; 
    }

    //to set the where column to check in the comparerism 
    public function where(string $column):static 
    {
        $this->where = $column;
        return $this;
    }



    //to set a value for the like operator for comparism
    public function like(string $product):static 
    {
        $this->like = $product; 
        return $this;
    }

    public function select(string $columns = "*"):static
    {
        $this->type = "select";
        $this->columns = $columns; 
        return $this;
    }


}