<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    private $view;

    public function __construct()
    {
             $this->view = new Engine(__DIR__ . "/../../themes/web", "php");
    }
    public function home()
    {
       // echo "Olá, Mundo! Home";
      //  $view = new Engine(__DIR__ . "/../../themes/web", "php");
        echo  $this->view->render("home");
    }

    public function about()
    {
        echo "Olá, Mundo! Sobre";
    }

    public function location()
    {
        echo "Essa é a minha localização!";
    }

    public function blog (){
        echo "esse é o meu blog bonitinho...";
    }

    public function contact (){
        echo "esse é o meu contatinho...";
    }
    
    public function profile (){
        echo "esse é o meu perfil bonitinho...";
    }
}
