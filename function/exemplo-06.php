<?php

    $pessoa = array(
        'nome'=>'Antonio',
        'idade'=>17
    );

    foreach ($pessoa as &$value){    //Pode ser usar o & comercial também para se adicionar valor na variável usada de parâmetro
                                    //no foreach
        if (gettype($value)==='integer') $value +=10;

        echo $value."<br>";

    }

    print_r($pessoa);


?>