<?php

    //Manipulando erros
    function error_handler($code,$message,$file,$line){

        echo json_encode(array(

            'code: '=>$code,
            'message: '=>$message,
            'line: '=>$line,
            'file: '=>$file

        ));

        return true;
    }

    set_error_handler("error_handler");

    //Erro abaixo para teste
    echo $total;

?>