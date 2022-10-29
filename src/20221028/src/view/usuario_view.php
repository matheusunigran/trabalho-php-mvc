<?php
$usuarios = $_REQUEST['usuarios'];

$icons = array("create" => "Editor", "remove_red_eye" => "Somente Leitura", "clear" => "Bloqueado", "supervisor_account" => "Professor", "person" => "Aluno", "verified_user" => "Administrador");
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
    <div id="modalUsuario" class="modal">
        <div class="modal-content">
            <h4>Usuário</h4>
            <h5 id="usuarioModalUsuario"></h5>
            <br><br>
            <div class="row">
                <form id="formUsuario" method="post" action="controller/InserirController.php">
                    <div class="input-field col m4 s12">
                        <input name="pergunta" id="pergunta" type="text" class="validate">
                        <label for="pergunta">Pergunta</label>
                    </div>
                    <div class="input-field col m4 s12">
                        <input name="usuarioid" id="usuarioid" type="text" class="validate">
                        <label for="usuarioid">Usuário ID</label>
                    </div>
                    <div class="input-field col m4 s12">
                        <select id="status" name="status">
                            <option value="" disabled selected>Selecione o Status</option>
                            <option value="create">Editor</option>
                            <option value="remove_red_eye">Somente Leitura</option>
                            <option value="clear">Bloqueado</option>
                        </select>
                        <label>Status do Usuário</label>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="col s12 right-align">
                        <a class="waves-effect waves-light btn light-blue lighten-1 btnSubmit" id="btnSubmitUsuario" data-form="formUsuario">Enviar</a>
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
                    <h4>Usuários</h4>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th></th>
                <th>Pergunta</th>
                <th>Usuário ID</th>
                <th>Status</th>
            </tr>
            <?php
            foreach ($usuarios as $usuario) {
            ?>
                <tr>
                    <td><?= $usuario["id"] ?></td>
                    <td><?= $usuario["pergunta"] ?></td>
                    <td><?= $usuario["usuario_id"] ?></td>
                    <td><i class="material-icons tooltipped" data-position="bottom" data-tooltip="<?= $icons[$usuario["status"]] ?>"><?= $usuario["status"] ?></i></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red" id="btn-add-user">
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

            $('#btn-add-user').click(() => {
                $('.modal').modal('open');
            })

            $('select').formSelect();

            $('#btnSubmitUsuario').click(()=>{
                $('#formUsuario').submit();
            })
        });
    </script>

</body>

</html>