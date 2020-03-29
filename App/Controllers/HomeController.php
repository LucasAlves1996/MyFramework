<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class HomeController extends Action
{
    public function index()
    {
        $this->view->dados = [
            'title' => 'Início | '.SITE_NAME
        ];

        $this->render('home', true);
    }
}

?>