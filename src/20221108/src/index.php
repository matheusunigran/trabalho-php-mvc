<?php
/*session_start();
    if(isset($_SESSION["peso"]) &&  isset($_SESSION["altura"])){
        $peso = $_SESSION["peso"];
        $altura = $_SESSION["altura"];
    }else if($_SERVER["REQUEST_METHOD"]=="POST"){
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
    }

    if(isset($peso) && isset($altura)){
        $_SESSION["peso"]=$peso;
        $_SESSION["altura"]=$altura;
    }*/
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Cálculo IMC</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,400;1,500;1,531;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="h-screen bg-white flex items-center justify-center font-sans text-gray-700" style="font-family: 'Jost', sans-serif">
    <div class="font-medium items-center text-center flex flex-col justify-center h-full">
        <div id = "formulario" class="flex flex-col justify-center items-center">
        <h1>Cálculo IMC</h1>
            <form method="post" action="../src/result.php">
                <div class = "peso">
                    <label for="peso">Peso:</label>
                    <input type="number" id="peso" name = "peso" placeholder="Informe seu peso"/>
                </div>
                <div class = "altura">
                    <label for="altura">Altura:</label>
                    <input type="number" id="altura" name = "altura" placeholder="Informe sua altura"/>
                </div>
                
                <div class="button">
                    <button type="submit">Enviar Dados</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<style>

body{
    text-align: center;
    height:100%; 
    width:100%;
    margin: 0 auto;
}
h1{
    font-size: 50px;
    text-align:center;
}

.peso, 
.altura{
    border: 1px solid black;
    padding: 12px;
    margin-top: 2px;
    text-align: left; 
    font-size: 20px;
    background-color: #add8e6;
    transition: 0.1s;
}
.peso:hover, 
.altura:hover{
    transform: scale(1.1); 
    background-color: #3ca2c3
}
.button{
    margin-top: 10px;
    border: 1px solid #2e7c94;
    text-align: center;
    font-size: 20px;
    background-color: #add8e6;
}

</style>