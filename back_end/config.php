<?php
    session_start();
    $dbHost = "127.0.0.1:3306";
    $dbUsername = "Gustavo";
    $dbPassword = "";
    $dbName = "formulario_loja";
  
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName,3306);

    /*if($conexao->connect_errno)
    {
         echo "Erro";
    }
    else
    {
     echo "Conexão efetuada com sucesso";
    }*/

?>