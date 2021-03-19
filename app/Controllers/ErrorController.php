<?php 
namespace App\Controllers;

// Recursos
use Core\Controller\Action;
use Core\Model\Container;


class ErrorController extends Action{

    public function notFound(){
        $this->render('notFound', 'error');
    }

}