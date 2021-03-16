<?php
namespace App;

use PDO;
use PDOException;

class Connection{
    
    private static $drive = DRIVE_DB;
    private static $host;
    private static $dbName = DB_NAME;
    private static $user;
    private static $password;
    private static $port;


    public static function connect(){

        
        try {
            
            $conn = new PDO(self::$drive.':'.self::$dbName);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $conn;
    }

}


