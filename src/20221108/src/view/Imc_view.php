<?php
$imcs = $_REQUEST['imcs'];

$icons = array("create" => "Editor", "done" => "Respondida", "remove_red_eye" => "Somente Leitura", "clear" => "Não Respondida", "supervisor_account" => "Professor", "person" => "Aluno", "verified_user" => "Administrador");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .tooltipped {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Modal Structure -->
    <div id="modalPergunta" class="modal">
        <div class="modal-content">
            <h4>Usuário</h4>
            <h5 id="perguntaModalPergunta"></h5>
            <br><br>
            <div class="row">
                <form id="formImc" method="post" action="controller/InserirController.php">
                    <div class="input-field col m4 s12">
                        <input name="peso" id="peso" type="number" class="validate">
                        <label for="peso">Peso</label>
                    </div>
                    <div class="input-field col m4 s12">
                        <input name="altura" id="altura" type="number" class="validate">
                        <label for="altura">Altura</label>
                    </div>
                    <!-- <div class="input-field col m4 s12">
                        <input name="usuario_id" id="usuario_id" type="text" class="validate">
                        <label for="usuario_id">Usuário ID</label>
                    </div> -->
                    <!--<div class="input-field col m4 s12">
                        <select id="selectStatus" name="statusPergunta">
                            <option value="" disabled selected>Selecione o Status</option>
                            <option value="done">Respondida</option>
                            <option value="clear">Não Respondida</option>
                        </select>
                        <label>Status do Usuário</label>
                    </div>-->
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="col s12 right-align">
                        <a class="waves-effect waves-light btn light-blue lighten-1 btnSubmit" id="btnSubmitImc" data-form="formImc">Enviar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php?p=home" class="brand-logo">PeR EngSoft</a>
    </nav>
    
    
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m6">
                    <h4>IMC</h4>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Peso</th>
                <th>Altura</th>
                <!--<th>Status</th>-->
            </tr>
            <?php
            foreach ($imcs as $imc) {
            ?>
                <tr>
                    <td><?= $imc["id"] ?></td>
                    <td><?= $imc["peso"] ?></td>
                    <td><?= $imc["altura"] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red" id="btn-add-imc">
            <i class="large material-icons">add</i>
        </a>
    </div>
    
    
    
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(() => {
            $('.modal').modal();
            $('.tooltipped').tooltip();
            $('.fixed-action-btn').floatingActionButton();

            $('#btn-add-imc').click(() => {
                $('.modal').modal('open');
            })

            $('select').formSelect();

            $('#btnSubmitImc').click(()=>{
                $('#formImc').submit();
            })

        });
    </script>

</body>

</html>