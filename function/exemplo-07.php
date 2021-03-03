<?php

    function soma(int ...$valores):int{ //Confingurando tipos padrão de recebimento de parâmetro e retorno

        return array_sum($valores); //Função do PHP para somar arrays

    }

    echo soma(2,2);
    echo "<br>";
    echo soma(5,10);
    echo "<br>";
    echo soma(1.5,2.2);
    echo "<br>";

?>