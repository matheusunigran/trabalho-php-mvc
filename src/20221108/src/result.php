<?php
    session_start();

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];


    session_unset();
    session_destroy();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Resultado</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,400;1,500;1,531;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="h-screen bg-white flex items-center justify-center font-sans text-gray-700" style="font-family: 'Jost', sans-serif">
    <div class="font-medium items-center text-center flex flex-col justify-center h-full">
        <div class="flex flex-col justify-center items-center">
        <?php
        if(isset($peso) && isset($altura)){
            if($altura >0 && $peso > 0){
                ?>
                <h1>Resultado</h1>
                <?php
                $altura = $altura/100;
                $IMC = ($peso / ($altura * $altura));
                function formatar($IMC) {
                    return number_format($IMC / 1, 2, '.', '');
                }
                if($IMC < 16){
                    $classificacao = "Magreza grave";
                    $grau = "Grau 0";
                }
                else if($IMC < 17){
                    $classificacao = "Magreza moderada";
                    $grau = "Grau 0";
                }
                else if($IMC < 18.5){
                    $classificacao = "Magreza leve";
                    $grau = "Grau 0";
                }
                else if($IMC < 25){
                    $classificacao = "Normal";
                    $grau = "Grau 0";
                }
                else if($IMC < 30){
                    $classificacao = "Sobrepeso";
                    $grau = "Grau 0";
                }
                else if($IMC < 35){
                    $classificacao = "Obesidade I";
                    $grau = "Grau I";
                }
                else if($IMC < 40){
                    $classificacao = "Obesidade II";
                    $grau = "Grau II";
                }
                else{
                    $classificacao = "Obesidade III";
                    $grau = "Grau III";
                }
                
                echo "<h3>O paciente tem o IMC de ".formatar($IMC)." kg/m2</h3>";
                echo"<br>";
                echo "<h3> A situação do paciente é de: ".$classificacao."</h3>";
                echo "<h3> Obesidade: ".$grau."</h3>";
            }else{  
            ?>
                <img src="https://static6.depositphotos.com/1000765/555/i/450/depositphotos_5551525-stock-photo-3d-small-complicated-question.jpg" alt="Confuso" height="100" width="100">
            <?php
            }
            ?>
            <a href="../src/index.php">Voltar</a>
            
            <?php
            }else{
                ?>
                <img src="https://static6.depositphotos.com/1000765/555/i/450/depositphotos_5551525-stock-photo-3d-small-complicated-question.jpg" alt="Confuso" height="100" width="100">
                <a href="../src/index.php">Voltar</a>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<body>
</html>

<style>
a{
    margin-top: 10px;
    font-size: 20px;
    text-decoration: underline;
}
h1{
    font-size: 50px;
    text-align:center;
}
</style>