<?php

$a = 10;
    function ola($b){   //Pode se adicionar um & para mudar a variável usada como parâmetro com base no retorno

        $b += 50;

        return $b;

    }
    
    echo ola($a);
    echo "<br>";
    echo ola($a);
    echo "<br>";
    echo $a;

?>