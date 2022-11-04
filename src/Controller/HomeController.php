<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class HomeController extends DefaultController {

    public function home()
    {
        $this->render('page/home');
    }
}