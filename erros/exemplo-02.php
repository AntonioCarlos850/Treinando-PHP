<?php

    function trataNome($nome){

        if(!$nome){

            throw new Exception("Nenhum nome foi encontrado", 1);
            

        }

        echo ucfirst($nome)."<br>";

    }

    try {
        trataNome("Antonio");
        trataNome("");
    } catch (Exception $e) {
        echo $e->getMessage()."<br>";
    } finally{
        echo "Executou o try";
    }


?>