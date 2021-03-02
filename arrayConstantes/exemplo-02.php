<?php

    $carros[0][0] =  "Ford";    //criando um array bi dimensional
    $carros[0][1] =  "Fiesta";
    $carros[0][2] =  "Ka";
    $carros[0][3] =  "Fusion";

    $carros[1][0] =  "GM";
    $carros[1][1] =  "Fusca";
    $carros[1][2] =  "Onix";
    $carros[1][3] =  "Camaro";

    echo $carros[0][1];
    echo "<br>";
    echo end($carros[1]);   //solicitando o último item do array carros onde a primeira posição é 1

?>