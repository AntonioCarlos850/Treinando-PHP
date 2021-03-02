<?php

    //Exemplo de uso do for
    for ($i = 0; $i < 1000; $i+=5) {

        if ($i >=200 && $i <= 800 ) continue;   //O continue significa que pode continuar executando o código

        if ($i === 900 )break;                  //O break significa que é para o for encerrar

        echo $i . "<br>";

    }

?>