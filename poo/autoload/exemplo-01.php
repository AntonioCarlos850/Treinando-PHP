<?php

    function spl_autoload_register($nomeClasse){

        require_once("$nomeClasse.php");

    }

    $carro = new DelRey;

    $carro->acelerar(80);
?>