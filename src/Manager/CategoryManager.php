<?php
namespace App\Manager;

use Core\Database\Database;

class CategoryManager {

    private ?\PDO $pdo;

    public function __construct()
    {
        // On charge PDO dans le __construct car toutes nos méthodes en ont besoin
        // on évite ainsi de répéter la ligne.
        $this->pdo = (new Database)->getPdo();
    }

    /**
     * Récupère les catégories et les affiches sur une page
     *
     * @return void
     */
    public function getCategories(): void
    {
        // On récupère nos catégories
        $stmt = "SELECT * FROM category ORDER BY id ASC";
        $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
        $categories = $query->fetchAll();

        // On affiche notre liste de catégories sur une page
        require_once ROOT."/templates/category/index.php";
    }
    
    public function getCategory(): void
    {
        if (isset($_GET['id']) && is_int($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            throw new \UnexpectedValueException("L'id attendu doit être un integer!");
        }

        $stmt = "SELECT * FROM category WHERE id = $id";
        $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
        $category = $query->fetch();

        require_once ROOT. "/templates/category/show.php";
    }
}