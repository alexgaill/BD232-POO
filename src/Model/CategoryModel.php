<?php
namespace App\Model;

use Core\Database\Database;

class CategoryModel extends Database{

    public function findAll(): array
    {
        $stmt = "SELECT * FROM category ORDER BY id ASC";
        // $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
        // $datas = $query->fetchAll();
        // return $datas ? 
        //     $datas : 
            // throw new \Exception("Aucune donnée n'a été trouvée");
        return $this->getData($stmt);
    }

    public function find(int $id): object
    {
        $stmt = "SELECT * FROM category WHERE id = $id";
        // $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
        // $data = $query->fetch();
        // return $data ? 
        //     $data : 
        //     throw new \Exception("Aucune donnée n'a été trouvée");
        return $this->getData($stmt, true);
    }
}