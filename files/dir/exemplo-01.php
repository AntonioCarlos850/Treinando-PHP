<?php

    $name = "images";

    if(!is_dir($name)){
        mkdir($name);
        echo "Arquivo criado com sucesso";
    } else {
        rmdir($name);
        echo "Arquivo excluido com sucesso";
    }



?>