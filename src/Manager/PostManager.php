<?php
namespace App\Manager;

use Core\Database\Database;

class PostManager {

    /**
     * Affiche une page contenant tous les articles
     *
     * @return void
     */
    public function getPosts(): void
    {
        $pdo = (new Database)->getPdo();
        $stmt = "SELECT post.id, title, content, category.id AS categoryId, name FROM post INNER JOIN category ON category.id = post.category ORDER BY id ASC";

        $query = $pdo->query($stmt, \PDO::FETCH_OBJ);
        $posts = $query->fetchAll();

        // $catStmt = "SELECT * FROM category";
        // $catQuery = $pdo->query($catStmt, \PDO::FETCH_OBJ);
        // $categories = $query->fetchAll();

        require_once ROOT. "/templates/posts/index.php";
    }
}