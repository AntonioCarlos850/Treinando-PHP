<?php

    $conn = new mysqli("localhost","root", "", "treinandophp");

    if ($conn->connect_error)
    {

        echo "Erro: ".$conn;

    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?,?)");

    $stmt ->bind_param("ss", $login,$senha);

    $login = "user";
    $senha = "123456";

    $stmt ->execute();

    $login = "usuario";
    $senha = "654123";
    
    $stmt ->execute();

?>