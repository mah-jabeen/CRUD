<?php

if($_SERVER['SERVER_NAME'] == 'localhost') {

    /**
     * database configuration
     */
    define('DBNAME', 'crud_12');
    define('DBHOST', '10.101.8.49');
    define('DBUSER', 'dbuser');    
    define('DBPASS', 'DBUser123');
    define('ROOT','http://localhost/testing/CRUD/MVC/public');
} else {
    
    
    define('DBNAME', 'crud_12');
    define('DBHOST', '10.101.8.49');
    define('DBUSER', 'dbuser');    
    define('DBPASS', 'DBUser123');
    define('ROOT','www.yourwebsite.com');
}

define('APP_NAME', 'My website');
define('APP_DESC', 'This is a website');
define('DEBUG', true);