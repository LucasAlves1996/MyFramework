<?php

namespace App;

use MyFramework\Init\AppLaunch;

class Route extends AppLaunch
{
    protected function initRoutes()
    {
        /* Default code for route creation */
        $routes['home'] = array(
            'path' => '/',
            'controller' => 'RoutesController',
            'action' => 'home'
        );

        /* You can create new routes here following the same pattern as above code */

        $this->setRoutes($routes);
    }
}

?>