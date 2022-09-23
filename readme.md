# E-COMMERCE BY Destiny Obamwonyi. 

## For project view  : 
please if you simply want to view the project go to the heroku url given below https://destinedwebe-commerce.herokuapp.com


## Documentation for the e-commerce project : 


__NOTE__ : to run this project on a local machine please add the file to your htdocs (if you are using XAMPP, WAMPP,LAMPP or MAMPP or any related php/apache server) and navigate to the e-commmerce directory, then the .htaccess files can handle the routing from there . 

If you intend to run this on the local php server please use this (rememer to remove the htaccess files there is one in the root and another in the public directory ) 

__CODE__: php -S localhost:8080 -t public 


### Project dependencies :
* Vlucas : for loading env files . 
* Filp/whoops : for local trouble shooting (with detailed errors) 
* Symphony/console : for implementing terminal commands for my migrations


### Database configuration :
* __Connection__: This can be found in /app/Config/database.php (as a returned array) cans also be found in /config/database
* __Migrations__: This can be found in /database/migrations,  to run the migration please use the code below(run composer update before it ).

__CODE__: php command.php migrate --fresh

_

