<?php
namespace App;
use Core\Init\Bootstrap;
/**
 * Classe Responsável por verificar a rota e chamar sua controller e sua ação.
 * 
 * @author Fabiano Basso <fabiano.basso.dev@gmail.com>
 * @copyright 2021 Fabiano Basso
 */

class Route extends Bootstrap{

    protected function initRoutes(){
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index' 
        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos' 
        );

        $this->setRoutes($routes);
    }

}