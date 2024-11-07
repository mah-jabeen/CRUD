<?php 

Trait Database{
    private function connect(){
        $string = "mysql:host=".DBHOST.";dbname=".DBNAME;
        $con=new PDO($string, DBUSER,DBPASS);
        return $con;
    }