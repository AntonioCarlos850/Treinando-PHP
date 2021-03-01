<?php

    $nome = (int)$_GET["a"];

    //o valor de "a" pode ser obtido colocando o símbolo de ? após a url do arquivo e colocando a=valor e se quiser passar
    //mais de um parametro se usa &

    //var_dump($nome);

    $ip = $_SERVER["REMOTE_ADDR"];
    $nomeArquivo = $_SERVER["SCRIPT_NAME"];

    echo($ip);

    echo("<br/>");

    echo($nomeArquivo);

?>