<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class RoutesController extends Action
{
    public function home()
    {
        $this->view->dados = [
            'title' => 'Início | MyFramework'    
        ];

        $this->render('home');
    }

    public function error($error)
    {
        $this->view->dados = [
            'title' => '404 | MyFramework',
            'error' => $error
        ];

        $this->render('error');
    }
}

?>