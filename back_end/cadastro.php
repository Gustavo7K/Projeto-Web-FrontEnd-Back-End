<?php
// isset -> serve para saber se uma variável está definida
if(isset($_POST['submit'])){
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
    VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    //header('Location: ../pages/PaginaLogin.html');

    //echo"Parabens!!! Você está cadastrado no nosso site";
}
else{
    echo"Faltam dados no cadastro";
}
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
    <h1>Parabéns!!! Você se cadastrou 😀</h1>
    <a href="../PaginaPrincipal.html"><button>Inicio</button></a>
</body>
</html>