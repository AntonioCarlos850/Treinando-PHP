<?php

    //Criando uma função anônima

    function test($callback){

        //imagine aqui algum processo que demore

        $callback();

    }

    test(function (){

        echo "Terminou!";

    });

?>