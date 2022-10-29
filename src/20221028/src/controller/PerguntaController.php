<?php

namespace App\Model;

require_once 'model/Pergunta.php';

class PerguntaController{
    public function exibir(){
        $pergunta = new Pergunta();

        $_REQUEST['perguntas'] =  $pergunta->ler();

        require_once 'view/pergunta_view.php';
    }
}