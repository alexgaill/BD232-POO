<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * Model permettant de récupérer les catégories
 * 
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class CategoryModel extends DefaultModel{
    
    protected string $table = 'category';

    // /**
    //  * Retourne l'ensemble des catégories
    //  *
    //  * @return array<object>
    //  */
    // public function findAll(): array
    // {
    //     $stmt = "SELECT * FROM category ORDER BY id ASC";
    //     // $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
    //     // $datas = $query->fetchAll();
    //     // return $datas ? 
    //     //     $datas : 
    //         // throw new \Exception("Aucune donnée n'a été trouvée");
    //     return $this->getData($stmt);
    // }

    // /**
    //  * Retourne une catégorie en fonction de son id
    //  *
    //  * @param integer $id
    //  * @return object
    //  */
    // public function find(int $id): object
    // {
    //     $stmt = "SELECT * FROM category WHERE id = $id";
    //     // $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
    //     // $data = $query->fetch();
    //     // return $data ? 
    //     //     $data : 
    //     //     throw new \Exception("Aucune donnée n'a été trouvée");
    //     return $this->getData($stmt, true);
    // }
}