<?php

    require_once ("config.php");

    use CLiente\Cadastro;

    $cad = new Cadastro;

    $cad->setNome("Antonio Carlos");
    $cad->setSenha("OpalaV8");
    $cad->setEmail("antoniocarlosjr850@gmail.com");

    echo $cad;

    echo "<br>";

    echo $cad->registrarVenda();

?>