<?php 

namespace Framwork\Routing;


class Route 
{

    //notice all the properties are protect 
    //this is to make it accessable by extended classes 
    protected string $method; 
    protected string $path; 
    protected $handler;

    protected array $parameters = [];


    protected ?string $name = null; 



    public function __construct(
        string $method , 
        string $path,
        $handler
    )
    {
        $this->method = $method;
        $this->path = $path; 
        $this->handler = $handler;
    }


    //returns the method passed during instanciation
    public function method(string $method) : string 
    {
        return $this->method;
    }

    //returns the path passed during instanciation
    public function path(string $path):string 
    {
        return $this->path;
    }

    
    //we will pass the path of the url to this method 
    //which will make use of the normalizePath() 
    //method that is also in this class . 
    public function matches(string $method, string $path):bool 
    {
        //if there's a literal match then don't waste 
        //any more time trying to match with 
        //a regular expression 
        if($this->method === $method && $this->path === $path) 
        {
            return true;
        }

        //note the code above would have been false for the 
        //interpreter to get to this place . 
        $parameterNames = []; 

        //the normalisePath method ensures there's a '/' 
        //before and after the path, while also 
        //removing duplicate "/" characters 
        //examples: 
        //-> '' becomes '/' 
        //-> 'home' becomes '/home/' 
        //-> 'product/{id}' becomes '/product/{id}/'
        //normalizePath job is simply adding a / to the beginning 
        //and the end of the url we are recieveing . 
        //then it return it to pattern . 
        $pattern = $this->normalisePath($this->path);

        //get all the parameter names and replace them with 
        //regular expression syntax, to match optional or 
        //required parameters 
        //
        //examples: 
        //-> '/home/' remains '/home/'
        //-> '/product/{id}/' becomes '/product/([^/]+)/'
        //-> '/blog/{slug?}/' becomes '/blog/([^/]*)(?:/?)'
        $pattern = preg_replace_callback(
            //firstly this aforfule(a course word) is using # has is delimiter
            //instead of /  so the # is notting special just 
            // a delimiter 
            '#{([^}]+)}/#', 
            function(array $found) use (&$parameterNames) 
            {
                array_push(
                    $parameterNames,rtrim($found[1], '?')
                );

                //if it's an optional parameter, we make the 
                //following slash optional as well 
                if(str_ends_with($found[1], '?')) 
                {
                    return '([^/]*)(?:/?)';
                }

             return '([^/]+)/';
            }, 
            //this pattern is referencing the old pattern 
            //which is the return value of the normalise pattern 
            //of the path , /product//{id} to /product/{id}/
            $pattern

        );


        //if there are no route parameters , and it 
        //wasn't a literal match , then this route 
        //will never match the requested path 

        if(!str_contains($pattern, '+') && !str_contains($pattern,"*")) 
        {
            return false;
        }



        //this guy is storing all the match found in the third parameter $matches 
        //which will be available on a global scope or what ever scope it was used 
        //so it can be assed outside the parameter. 
        //therefore matches becomes an array of all the the match found for a particular expression . 
        preg_match_all("#{$pattern}#", $this->normalisePath($path),$matches);


        $parameterValues = []; 

        //if more than one set of match was found 
        if(count($matches[1]) > 0) 
        {
            //if the route matches the request path then 
            //we need to assemble the parameters before
            //we can return true for the match 
            foreach($matches[1] as $value) 
            {
                array_push($parameterValues, $value);
            }

            // make an empty array so that we can still 
            // call array combine with optional parameters 
            //which may not have been provided 
            $emptyValues = array_fill(0, count($parameterNames), null);

            // += syntax for arrays means: take values from the
            // right-hand side and only add them to the left-hand 
            //side if the same key doesn't already exist . 
            //
            // you'll usually want to use array_merge to combine
            //arrays , but this is an interesting use for += 

            $parameterValues += $emptyValues; 

            $this->parameters = array_combine($parameterNames,$parameterValues);

            return true; 

        }

        return false;

    }


    private function normalisePath(string $path): string 
    {

        //the trim method removes the / from the beginning and 
        //end of the string . 
        $path = trim($path, '/');
        $path = "/{$path}/";


        //this will normalise the any path that has multiple
        //  / in consecutive form like (/product//item//1)
        // the // together will be fixed to / therefore 
        // a route that comes as /product//item//one 
        // will be fixed to /product/item/one .
        $path = preg_replace("/[\/]{2,}/","/",$path); 
        
        return $path;
    }





    public function dispatch() 
    {
        return call_user_func($this->handler);
    }
 

    public function parameters(): array 
    {
        return $this->parameters;
    }


    public function name(string $name = null):mixed
    {
        if($name) 
        {
            $this->name = $name; 
            return $this;
        }
        return $this->name;
    }

    
}







?>