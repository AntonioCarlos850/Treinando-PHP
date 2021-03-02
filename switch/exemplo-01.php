<?php

    $diaDaSemana = date("w");

    switch ($diaDaSemana){

        case 0:              //caso o valor de $diaDaSemana for 0 então será Domingo
        echo "Domingo";
        break;              //o break serve para parar a e execução do switch

        case 1:
        echo "Segunda-feira";
        break;

        case 2:
        echo "Terça-feira";
        break;

        case 3:
        echo "Quarta-feira";
        break;

        case 4:
        echo "Quinta-feira";
        break;

        case 5:
        echo "Sexta-feira";
        break;

        case 6:
        echo "Sábado";
        break;

        default:                //valor padrão caso nenhum dos outros casos seja usado 
        echo "Data Inválida";
        break;

    }

?>