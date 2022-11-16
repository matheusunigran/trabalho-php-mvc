<?php
     namespace App\model;

     require_once "Conexao.php";

    // class Imc {
    //     //private $id;
    //     private $altura;
    //     private $peso;
    //    // private $conexao;


    //     function __construct(
    //         $altura = null, 
    //         $peso = null
            
            
    //         ) {
    //         /*$this->altura = $altura;
    //         $this->peso = $peso;*/
    //       //  $this->id = null;
    //         $this->setPeso($peso);
    //         $this->setAltura($altura);
        //$this->setUsuario_id($usuario_id);


      //  $this->conexao = Conexao::getInstancia();
            

      //  }
            
        // public function getId()
        // {
        //     return $this->id;
        // }

    
   /* class Imc{
        private $altura;
        private $peso;

        function __construct($altura = 0, $peso = 0)
         {
            $this->altura = $altura;
            $this->peso = $peso;*/
    //        $this->id = null;
    //        $this->setPeso($peso);
    //        $this->setAltura($altura);
    //        $this->setUsuario_id($usuario_id);
        // }


    
        /*public function getAltura() {
            return $this->altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
        }

        public function getImc() {
            return $this->peso/($this->altura * $this->altura);
        }

        public function getClassificacao() {
            if($this->peso == 0 || $this->altura == 0)
                return false;

            $imc = $this->getImc();

            if($imc < 18.5)
                return $this->classificacao = "Magreza";

            else if($imc >= 18.5 && $imc < 25)
                return $this->classificacao = "Normal";

            else if($imc >= 25 && $imc < 30)
                return $this->classificacao = "Sobrepeso";

            else if($imc >= 30 && $imc < 35)
                return $this->classificacao = "Obesidade I";

            else if($imc >= 35 && $imc < 40)
                return $this->classificacao = "Obesidade II";

            else if($imc >= 40)
                return $this->classificacao = "Obesidade III";
        }
        public function setClassificacao($classificacao) {
            $this->classificacao = $classificacao;
        }

        public function getGrau() {
            if($this->peso == 0 || $this->altura == 0)
                return false;

            $imc = $this->getImc();

            if($imc < 18.5)
                return $this->grau = "0";

            else if($imc >= 18.5 && $imc < 25)
                return $this->grau = "0";

            else if($imc >= 25 && $imc < 30)
                return $this->grau = "0";

            else if($imc >= 30 && $imc < 35)
                return $this->grau = "I";

            else if($imc >= 35 && $imc < 40)
                return $this->grau = "II";

            else if($imc >= 40)
                return $this->grau = "III";
        }
        public function setGrau($grau) {
            $this->grau = $grau;
        }

    }*/


    //     public function criar()
    //     {
    //         if ($this->id != null)
    //             return false;
    
    //         $query = "INSERT INTO imc (peso,altura, created,modified) VALUES ('" . $this->peso . "','" . $this->altura . "','" . date(DATE_ATOM) . "','" . date(DATE_ATOM) . "')";


    //         $result = pg_query($query);

    //         if ($result)
    //             $this->id = pg_last_oid($result);

    //         return $result;
    //     }


    //     public function ler($id = null)
    //     {
    //         if ($id == null) {
    //             $sql = "SELECT * FROM imc";
    //         } else {
    //             $sql = "SELECT * FROM imc WHERE id='$id'";
    //         }
    //         $returnValue = array();

    //         $result = pg_query($sql);

    //         while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    //             array_push($returnValue, $line);
    //         }

    //         return $returnValue;
    //     }

    //     public function getPergunta($id)
    //     {
    //         $result = $this->ler($id);
    //         if (empty($result))
    //             return 0;

    //         $result = $result[0];

    //         $this->id = $id;
    //         $this->setPeso($result["peso"]);
    //         $this->setAltura($result["altura"]);
    //         //$this->setUsuario_id($result["usuario_id"]);


    //         return $this;
    //     }


    //     public function atualizar()
    //     {
    //         error_reporting(E_ERROR | E_PARSE);

    //         if ($this->id == null)
    //             return false;

    //         //$query = "UPDATE perguntas SET pergunta= '" . $this->pergunta . "', usuario_id= '" . $this->usuarioid . "', status= '" . $this->status . "', modified= '" . date(DATE_ATOM) . "' WHERE id= '" . $this->id . "'";

    //         $query = "UPDATE imc SET peso= '" . $this->peso . "', altura= '" . $this->altura ."', modified= '" . date(DATE_ATOM) . "' WHERE id= '" . $this->id . "'";

    //         $result = pg_query($query);

    //         return $result;
    //     }


    //     public function deletar()
    //     {
    //         if ($this->id == null)
    //             return false;

    //         $query = "DELETE FROM imc WHERE id='" . $this->id . "'";

    //         $result = pg_query($query);
            
    //         if($result)
    //             $this->id = null;

    //         return $result;
    //     }
    // }
