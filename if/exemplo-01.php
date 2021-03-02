<?php

    $qualSuaIdade = 25;
    $idadeCrianca = 12;
    $idadeAdulto = 18;
    $idadeIdoso = 65;

    if($qualSuaIdade < $idadeCrianca){

        echo "Criança";

    } else if($qualSuaIdade < $idadeAdulto){

        echo "Adolecente";

    } else if($qualSuaIdade < $idadeIdoso){

        echo "Adulto";

    }  else {

        echo "Idoso";

    }

    echo "<br>";
    echo ($qualSuaIdade > $idadeAdulto)?"Adulto" : "Não é adulto" // ? siginifica então e : significa senão

?>