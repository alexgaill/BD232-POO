<?php

use App\Fixtures\AppFixtures;
use App\Manager\CategoryManager;
use App\Manager\PostManager;

define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

// Charge de fausses données en BDD pour les tests
// (new AppFixtures)->load();
// echo "Les fixtures sont chargées";

// Affiche notre page de catégories
// (new CategoryManager)->getCategories();
(new PostManager)->getPosts();






