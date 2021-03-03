<?php

    function ola($texto = "Mundo", $periodo = "Bom dia"){   //cria uma função que possui valores pré-definidos

        return "Olá $texto! $periodo <br>";

    }

    echo ola("Mundo", "Bom dia");
    echo ola("","Boa noite");
    echo ola("Glaucio","");
    echo ola("Antonio","Boa tarde");

?>