<?php

    $pessoas = array();

    array_push($pessoas, array(

        'idade' => 20,
        'nome' => 'João'

    ));

    array_push($pessoas, array(

        'idade' => 35,
        'nome' => 'Antonio'

    ));

    echo json_encode($pessoas); //tranformando um array em json

?>