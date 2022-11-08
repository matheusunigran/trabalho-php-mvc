<?php

namespace App\model;

require_once "../model/Pergunta.php";


$pergunta = new Pergunta();

$pergunta->setPergunta($_POST["pergunta"]);
//$pergunta->setUsuario_id($_POST["usuario_id"]);
$pergunta->setStatus($_POST["statusPergunta"]);

$pergunta->criar();