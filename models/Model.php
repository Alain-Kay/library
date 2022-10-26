<?php

abstract class Model{ // Abstract class
    private static $pdo; 
    private static $dns = 'mysql:host=localhost;dbname=library';
    private static $user = 'root'; 
    private static $pass = '';
    private static $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    private static function setBdd(){ // Set the PDO object
         self::$pdo = new PDO(self::$dns, self::$user, self::$pass, self::$options);
         
    }

    protected function getBdd(){ // Get the PDO object
        if(self::$pdo === null){
            self::setBdd(); // If the PDO object is not set, set it
        }
        return self::$pdo; // Return the PDO object
    }

   
    
}