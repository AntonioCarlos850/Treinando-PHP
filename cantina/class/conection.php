<?php

class Conexao
{

    
    public static function conecta()
    {
        $conn = new mysqli("localhost", "root", "", "bdcantina");
        return $conn;
    }
}

?>