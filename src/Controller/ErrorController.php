<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class ErrorController extends DefaultController {

    public function error(\Exception $e)
    {
        $this->render('error/error', [
            'exception' => $e
        ]);
    }

    public function error404()
    {
        $this->render('error/404');
    }
}