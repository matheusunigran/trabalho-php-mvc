<?php

namespace App\model;

require_once "../model/Usuario.php";


$usuario = new Usuario();

$usuario->setPergunta($_POST["nome"]);
$usuario->setUsuarioid($_POST["nome"]);
$usuario->setStatus($_POST["status"]);


/*$usuario->setNome($_POST["nome"]);
$usuario->setRGM($_POST["rgm"]);
$usuario->setNomeUsuario($_POST["nomeUsuario"]);
$usuario->setTipo($_POST["tipoUsuario"]);
$usuario->setAdministrador($_POST["administradorUsuario"] == 1 ? "t" : "f");
$usuario->setStatus($_POST["statusUsuario"]);*/

$usuario->criar();
