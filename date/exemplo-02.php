<?php

    //$ts = strtotime("2020/9/15");
    //$ts = strtotime("now");
    $ts = strtotime("+1 week"); //Criando várias variaveis usando string to time, mostrando tbm que aceita termos como dia atual+
                                //uma semana

    echo date("l, d/m/Y",$ts);  //Na função date primeiro é passado o formato e depois o timestamp, estou usando a variável $ts como
                                //timestamp

?>