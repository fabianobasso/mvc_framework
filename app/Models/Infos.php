<?php
namespace App\Models;
use Core\Model\Model;
use PDO;

class Infos extends Model{

    public function getInfo(){
        $query = "select * from sobre_nos";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}