<?php

    $json = '[{"idade":20,"nome":"Jo\u00e3o"},{"idade":35,"nome":"Antonio"}]'; //Transformando um json em uma variável

    $data = json_decode($json, true);   //Transformando a variável que tem o código do json em um array

    var_dump($data);

?>