<?php
namespace Core\Model;

use Core\Database\Database;

abstract class DefaultModel extends Database implements ModelInterface, ModelCriteriaInterface{

    protected string $table;

    /**
     * Retourne un tableau d'éléments
     *
     * @return array<object>
     */
    public function findAll(): array
    {
        $stmt = "SELECT * FROM ". $this->table; 
        return $this->getData($stmt);
    }

    /**
     * Retourne un objet en fonction de son id
     *
     * @param integer $id
     * @return object
     */
    public function find(int $id): object
    {
        $stmt = "SELECT * FROM ". $this->table . " WHERE id = $id"; 
        return $this->getData($stmt, true);
    }

    public abstract function findBy(array $criteria = []): array;

    public abstract function findOneBy(array $criteria = []): object;
}