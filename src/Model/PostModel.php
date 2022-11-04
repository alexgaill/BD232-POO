<?php
namespace App\Model;

use Core\Model\DefaultModel;

class PostModel extends DefaultModel {

    protected string $table = 'post';
    protected string $entity = 'Post';

    /**
     * Retourne l'ensemble des articles présents en BDD avec les informations de la catégorie liée
     *
     * @return array
     */
    public function findAllWithCategory(): array
    {
        $stmt = "SELECT post.id, title, content, created_at, category.id AS categoryId, category.name 
        FROM post 
        INNER JOIN category ON category.id = post.category 
        ORDER BY id ASC";
        return $this->getData($stmt);
    }

    /**
     * Retourne un article en fonction de l'id passé avec les informations de la catégorie liée
     *
     * @param integer $id
     * @return object
     */
    public function findWithCategory(int $id): object
    {
        $stmt = "SELECT post.id, title, content, category.id AS categoryId, name 
                FROM post 
                INNER JOIN category ON category.id = post.category 
                WHERE post.id = $id";
        return $this->getData($stmt, true);
    }
}