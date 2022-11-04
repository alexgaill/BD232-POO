<?php

use App\Manager\PostManager;
use App\Fixtures\AppFixtures;
use App\Manager\CategoryManager;
use App\Controller\PostController;
use App\Controller\ErrorController;
use App\Controller\CategoryController;
use App\Controller\HomeController;
use Core\Routeur\Routeur;

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

