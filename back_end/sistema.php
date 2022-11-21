<?php
    session_start();
    //print_r($_SESSION);
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outfits</title>
</head>
<style>
    body{
        color: white;
        background: #201b2c;
        font-family: 'DynaPuff', cursive;
        text-align: center;
        margin: 10%;
    }
    button{
        width: 10%;
        padding: 16px 10px;
        margin: 3%;
        border: none;
        border-radius: 8px;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: #2b134b;
        background: #00ff88;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #00ff8052;
    }
</style>

<body>
    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <a href="../PaginaPrincipal.html"><button>Inicio</button></a>
</body>
</html>