<?php

require_once "Conexao.php";

class Usuario
{
    private $id;
    private $nome;
    private $rgm;
    private $nomeUsuario;
    private $senha;
    private $status;
    private $tipo;
    private $administrador;

    private $enumStatus = array(null => null, "create" => "1", "remove_red_eye" => "2", "clear" => "3");
    private $enumTipo = array(
        null => null, "supervisor_account" => "1",
        "person" => "2"
    );
    private $enumAdministrador = array(null => null, "1" => true, "0" => false);

    private $conexao;

    function __construct(
        $nome = null,
        $rgm = null,
        $nomeUsuario = null,
        $senha = null,
        $status = null,
        $tipo = null,
        $administrador = null
    ) {
        $this->id = null;
        $this->setNome($nome);
        $this->setRGM($rgm);
        $this->setNomeUsuario($nomeUsuario);
        $this->setSenha($senha);
        $this->setStatus($status);
        $this->setTipo($tipo);
        $this->setAdministrador($administrador);

        $this->conexao = Conexao::getInstancia();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setRGM($rgm)
    {
        $this->rgm = $rgm;
    }
    public function
    setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setStatus($status)
    {
        $this->status = $this->enumStatus[$status];
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $this->enumTipo[$tipo];
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function
    setAdministrador($administrador)
    {
        $this->administrador = $this->enumAdministrador[$administrador];
    }
    public function getAdministrador()
    {
        return $this->administrador;
    }


    public function criar()
    {
        if ($this->id != null)
            return false;

        $query = "INSERT INTO usuarios (nome,rgm,usuario,senha,status,tipo,administrador,created,modified) VALUES ('".$this->nome."','".$this->rgm."','".$this->nomeUsuario."','".md5(sha1($this->senha))."','remove_red_eye','person',false,'" . date(DATE_ATOM) . "','" . date(DATE_ATOM) . "')";

        $result = pg_query($query);

        if($result)
            $this->id = pg_last_oid($result);

        return $result;
    }
}


$usuario = new Usuario("Felipe","46763","fpp","12345","remove_red_eye","supervisor_account",true);

$usuario->criar();