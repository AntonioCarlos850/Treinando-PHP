<?php

    $data = array("nome"=>"Antonio Carlos");
    setcookie("NOME_COOKIE", json_encode($data), time() + 3600);
    echo "ok";

?>