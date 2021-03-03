<?php

    function ola(){

        $argumentos = func_get_args();  
        return $argumentos; //Retorna um array contendo uma lista de argumentos da função

    }

    var_dump(ola("Bom dia!"));

?>