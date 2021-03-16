<?php
namespace Core\Controller;

use stdClass;

/**
 * Abstração dos controller, métodos incomum em todo os controllers
 */
abstract class Action{

    protected $view;

    public function __construct(){
        // cria um objeto vazio para atribuir os dados das camada de model
        $this->view = new stdClass();
    }

    protected function render($view, $layout){
        $this->view->page = $view;
        if(file_exists("../app/Views/{$layout}.phtml")){
            require_once "../app/Views/{$layout}.phtml";
        }else{
            $this->content();
        }
        
    }

    protected function content(){
        $currentClass = get_class($this);
        $currentClass = str_replace("App\\Controllers\\", '', $currentClass);
        $currentClass = strtolower(str_replace("Controller", '', $currentClass));
        require_once "../app/Views/{$currentClass}/{$this->view->page}.phtml";
    }
}