<?php

namespace App\model;

require_once "../model/Imc.php";


$imc = new Imc();

$imc->setPeso($_POST["peso"]);
//$pergunta->setUsuario_id($_POST["usuario_id"]);
$imc->setAltura($_POST["altura"]);

$imc->criar();