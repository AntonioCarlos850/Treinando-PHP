<?php

    $condicao = true;

    while ($condicao){  //Exemplo de uso do while, enquanto a condição for verdadeira ele executa

        $numero = rand(1,10);   //Gera um número aleatório entre 1 e 10

        if ($numero === 3){

            echo "É três!!! ";
            $condicao = false;

        }

        echo $numero." ";

    }

?>