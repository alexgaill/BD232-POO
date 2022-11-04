<?php

namespace Core\Routeur;

use App\Controller\HomeController;
use App\Controller\PostController;
use App\Controller\ErrorController;
use App\Controller\CategoryController;

class Routeur
{
    public static function routes()
    {
        try {
            if (isset($_GET['page']) && !empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'category':
                        (new CategoryController)->index();
                        break;
                    case 'category_show':
                        (new CategoryController)->show();
                        break;
                    case 'category_add':
                        (new CategoryController)->add();
                        break;
                    case 'post':
                        (new PostController)->index();
                        break;
                    case 'post_show':
                        (new PostController)->show();
                        break;

                    default:
                        (new ErrorController)->error404();
                        break;
                }
            } else {
                (new HomeController)->home();
            }
        } catch (\Exception $e) {
            (new ErrorController)->error($e);
        }
    }
}
