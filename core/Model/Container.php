<?php
namespace Core\Model;

use App\Connection;
/**
 * Abstração para um controller que retorna a classe com a conexão de forma dinamica
 * 
 */

class Container{

    public static function getModel($model){

        $class = "\\App\\Models\\".ucfirst($model);
        $conn = Connection::connect();
        return new $class($conn);
        
    }
}