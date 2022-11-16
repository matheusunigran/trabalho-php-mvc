<?php

namespace App\Model\Imc;

require_once 'model/Imc.php';

class ImcController{
    public function exibir(){
        $imc = new Imc();

        $_REQUEST['imcs'] =  $imc->ler();

        require_once 'view/Imc_view.php';
    }
}