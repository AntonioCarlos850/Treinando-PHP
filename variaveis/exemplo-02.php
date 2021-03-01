<?php

    $anoNascimento = 2003;
    $nome = "Rafael";
    $sobrenome = "Techio";
    $nomeCompleto = $nome." ".$sobrenome;

    echo($nomeCompleto);

    // o (exit) serve para encerrar o codigo 
    //comentário em linha

    /*
    comentário em bloco
    */

    echo $nome;

    echo "<br/>";

    unset ($nome);//o unset deleta uma variável

    if(isset($nome)){ //o isset vê se uma variável existe

        echo $nome;

    }

?>
