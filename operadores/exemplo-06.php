<?php

    $a = NULL;
    $b = NULL;
    $c = 12;

    echo $a ?? $b ?? $c; //retorna o primeiro valor não nulo
?>