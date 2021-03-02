<?php

    require_once("config.php");    

    //session_unset($_SESSION['nome']); é uma maneira de limpar a variável $_SESSION
    //session_destroy(); destroi todo conteúdo da $_SESSION

    echo $_SESSION['nome']; 

?>