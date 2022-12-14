<?php
namespace App\Fixtures;

use Faker\Factory;
use Faker\Generator;
use Core\Database\Database;

final class AppFixtures {

    /**
     * Connexion à la BDD
     *
     * @var \PDO|null
     */
    private ?\PDO $pdo;

    /**
     * Générateur de Faker pour charger les fausses données
     *
     * @var Generator
     */
    private Generator $faker;

    /**
     * Permet la création de nos catégories et articles de test
     *
     * @return void
     */
    public function load(): void
    {
        // $db = new Database();
        // $pdo = $db->getPdo();
        $this->pdo = (new Database)->getPdo();

        $this->faker = Factory::create();
        $this->createCategories();
        
    }

    /**
     * Créé de fausses catégories
     *
     * @return void
     */
    private function createCategories()
    {
        for ($i=0; $i < 10; $i++) { 
            try {
                // On génère la requête SQL
                $statement = "INSERT INTO category (name) VALUES ('". $this->faker->words(3, true) ."')";
                // On prépare notre requête
                $prepare = $this->pdo->prepare($statement);
                // On l'exécute et l'insert en BDD
                $prepare->execute();
                // On récupère l'id de la dernière catégorie insérée
                $category = $this->pdo->lastInsertId('category');
                $this->createPosts($category);

            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    /**
     * Créé de faux articles
     *
     * @param integer $category
     * @return void
     */
    private function createPosts(int $category): void
    {
        for ($j=0; $j < 10; $j++) { 
            $stmt = "INSERT INTO post (title, content, created_at, category) VALUES (:title, :content, NOW(), $category)";
            $prepare = $this->pdo->prepare($stmt);
            $prepare->bindValue("title", $this->faker->words(5, true));
            $prepare->bindValue("content", $this->faker->paragraphs(5, true));
            
            $prepare->execute();
        }
    }
}