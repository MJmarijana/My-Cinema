<?php

class Model {
    
    protected $table;
    protected static $_pdo = null;
    
    function __construct() {
        $user =  "root";
        $password = "";
        $database = "my_cinema";
        $host = "localhost";
        
        if (self::$_pdo === null) {
            self::$_pdo = new PDO("mysql:host=".$host.";dbname=".$database, $user, $password); 
        }    
            
    }
    
   
}
     
