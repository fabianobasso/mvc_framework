<?php

namespace App\Controllers;

// Recursos
use Core\Controller\Action;
use Core\Model\Container;

// Models
use App\Models\Produto;
use App\Models\Infos;

class IndexController extends Action{

    public function index(){

        $produto = Container::getModel('Produto');
        // exemplo de como passar dados para view 
        $this->view->datas = $produto->getProduto();
        $this->render('index', 'layout1');
    }

    public function sobreNos(){
        $infos = Container::getModel('Infos');
        // exemplo de como passar dados para view 
        $this->view->datas = $infos->getInfo();
        $this->render('sobreNos', 'layout2');
    }
}