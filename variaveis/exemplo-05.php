<?php

    $nome = "Vini";

    function teste(){

        global $nome;
        echo $nome;
        
    }

    function teste2(){

        $nome = "Fernando";
        echo $nome;

    }

    teste();
    teste2();

?>