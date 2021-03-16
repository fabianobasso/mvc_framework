<?php
namespace App\Models;
use PDO;
use Core\Model\Model;

/**
 * Model para teste do framework funcional
 */
class Produto extends Model{

    public function getProduto(){
        $query = "select * from produto";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}