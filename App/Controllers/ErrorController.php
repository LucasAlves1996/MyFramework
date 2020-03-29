<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class ErrorController extends Action
{
    public function pageNotFound()
    {
        $this->view->dados = [
            'title' => '404 | '.SITE_NAME,
            'error' => 'Page not found!'
        ];

        $this->render('error', true);
    }
}

?>