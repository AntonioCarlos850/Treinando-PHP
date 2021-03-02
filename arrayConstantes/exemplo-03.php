<?php

    $pessoas = array();

    array_push($pessoas, array( //Adicionando um item depois do array já ter sido criado e adicinando um array dentro de outro

        'idade' => 20,
        'nome' => 'João'

    ));

    array_push($pessoas, array(

        'idade' => 35,
        'nome' => 'Antonio'

    ));

    print_r($pessoas[0]['nome']);   //Mostrando um array com uma posição já escolhida e pedidondo uma chave específica

?>