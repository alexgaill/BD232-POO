<?php

use Core\Routeur\Routeur;
use App\Manager\PostManager;
use App\Fixtures\AppFixtures;
use App\Manager\CategoryManager;
use App\Controller\HomeController;
use App\Controller\PostController;
use App\Controller\ErrorController;
use App\Controller\CategoryController;
use App\Entity\Post;

define("ROOT", __DIR__);
require ROOT . "/vendor/autoload.php";
Routeur::routes();

// Charge de fausses données en BDD pour les tests
// (new AppFixtures)->load();
// echo "Les fixtures sont chargées";

// Affiche notre page de catégories
// (new CategoryManager)->getCategories();
// (new PostManager)->getPosts();
// (new CategoryController)->show();
// (new PostController)->index();
// (new CategoryController)->add();

/**
 * lorsqu'une variable est égale à une variable contenant un objet,
 * l'objet est reproduit à l'identique. Si on modifie une information de l'objet, c'est dans les 2 variables qu'il est modifié.
 * en effet, les 2 objets ont le même id, c'est donc le même objet qui est représenté.
 */
$post = new Post;
$post2 = $post;
// $post2->setTitle("hello");

/**
 * Si l'on souhaite cloné un objet, on va utilisé le mot-clé clone. Notre objet est ainsi dupliqué mais son id est changé.
 */
$post3 = clone $post;
// $post->setContent("coucou");

var_dump($post);
echo "<br>";
var_dump($post2);
echo "<br>";
var_dump($post3);
echo "<br>";
echo "<br>";

echo "Post et Post2 sont strictement identiques? ". ($post === $post2 ? "oui" : 'non');
echo "<br>";
echo "Post et Post3 sont identiques? ". ($post == $post3 ? "oui" : 'non');
echo "<br>";
echo "Post et Post3 sont strictement identiques? ". ($post === $post3 ? "oui" : 'non');