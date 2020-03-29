<?php

namespace App;

use MyFramework\Init\AppLaunch;

class Route extends AppLaunch
{
    protected function initRoutes()
    {
        $routes['home'] = array(
            'path' => '/',
            'controller' => 'HomeController',
            'action' => 'index'
        );

        

        $this->setRoutes($routes);
    }
}

?>