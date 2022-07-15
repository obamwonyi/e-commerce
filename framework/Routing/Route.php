<?php 

namespace Framework\Routing;


class Route 
{

    protected string $method; 
    protected string $path; 
    protected $handler;

    public function __construct(string $method,string $path,$handler) 
    {
        $this->method = $method; 
        $this->path = $path;
        $this->handler = $handler;
    }

    public function method() 
    {
        return $this->method;
    }

    public function path() 
    {
        return $this->path; 
    }


    public function matches($method, $path) 
    {
        //if there's a match for the route simple return true 
        //so as to fetch the view , instead of further unnecessary 
        //check . 
        if($this->method === $method && $this->path === $path) 
        {
            return true; 
        }


        //this will store the parameter names , like 
        //in the url /product/{id}/ the value 
        // id will be stored in inside this array($parameterNames)
        //the input are passed with the aid of a referenced variable . 
        $parameterNames = []; 

        //the normalisePath method ensures there's a slash(/) before 
        //and after it like if product/{id} is passed as the url 
        //it will be replaced with /product/{id}/
        //it will also remove duplicaate slashes(//) 
        //like /product//{id} will become /product/{id}/ 
        //more examples : 
        //-> " " becomes "/" (empty url or default root) 
        //-> "home" becomes "/home/" 
        //-> "product/{id}" becomes "/product/{id}/ 
        $pattern = $this->normalisePath($this->path);


        //get all the parameter names and replace them with regular expression 
        //syntax, to match optional or required parameters 
        //examples: 
        //-> "/home/" remains "/home/" 
        //-> "/product/{id}" becomes "/product/([^/]+)/" 
        //-> "/blog/{slug?}/" becomes "/blog/([^/]*)(?:/?)"
        $pattern = preg_replace_callback( 
            //first this is the pattern in the preg_replace_callback to check for 
            // the # in beginning and end are the delimeter used in place of 
            // slashes (/) . its job is to check for any thing inside the {} 
            // that is not } (as this will mean {}} which is wrong routing) 
            //and chenge it to the replacement . 
            '#{([^}]+)}/#',
            //the $found varaible will reference the parameterNames variable 
            //that means $found is another name for parameterNames (like a hard link in linux) 
            //any value that match the third parameter ($pattern) will be stored in this 
            //array ($parameterNames) with the ? trimed off if it happens to be in the form or {id?} 
            function(array $found) use (&$parameterNames) 
            {

                //triming the ? of the  {id?} before adding it to the 
                // parameterNames array . 
                array_push($parameterNames, rtrim($found[1], "?"));
            
                //if the strings ends with ? replace the matched value 
                //with the regular expression ([^/]*)(?:/?)
                if( str_ends_with($found[1], "?")) 
                {
                    return '([^/]*)(?:/?)';
                }

                //if the if statement above fails then replace with ([^/]+)/
                // the regular expression 
                return '([^/]+)/';
            }, 

            //this is the string (path) to check for a match 
            $pattern
        );


        if(!str_contains($pattern, "+") && !str_contains($pattern, "*"))
        {
            return false; 
        }


        preg_match_all("#{$pattern}#", $this->normalisePath($path), $matches);

        $parameterValues = []; 


        if(count($matches[1]) > 0) 
        {
            //if the route matches the request path then 
            //we need to assemble the parameters before 
            //we can return true for the match 
            
            foreach($matches[1] as $value) 
            {
                array_push($parameterValues, $value);
            }

            //make an empty array so that we can still 
            //call array combine with optional parameters 
            //which may not have been provided 
            $emptyValues = array_fill(0, count($parameterNames), null);

            // += syntax for arrays means: take values from the 
            // right-hand side and only add them to the left-hand  
            //side if the same key doesn't already exist . 
            // 
            //you'll usually want to use array_merge to combine 
            //arrays , but this is an interesting use for += 

            $parameterValues += $emptyValues;
            
            $this->parameters = array_combine($parameterNames,$parameterValues);

            return true; 
        }

        return false;

    }


    public function normalisePath(string $path) : string 
    {
        //remove the slashes (/) in the begining and end of the 
        // string (path) 
        $path = trim($path,"/");
        //appends slashes to the beginning and end of the string 
        // (path). 
        $path = "/{$path}/";

        $path = preg_replace("/[\/]{2,}/", "/", $path);

        return $path;
    }

    public function dispatch() 
    {
        return call_user_func($this->handler);
    }
    
}





?>