<?php

    $nome = "antonio carlos";

    $nome = strtoupper($nome); //deixa todas as letras em maiusculo
    echo $nome;
    echo "<br>";

    $nome = strtolower($nome); //deixa todas as letras em minusculo
    echo $nome;
    echo "<br>";

    echo ucfirst($nome); //deixa a primeira letra minuscula
    echo "<br>";

    echo ucwords($nome); //deixa a primeira letra de todas as palavras em minusculo
    echo "<br>";


?>