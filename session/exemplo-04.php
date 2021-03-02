<?php

    //session_id('id da sessão') pode ser usado para pegar parametros de outra id de sessão

    require_once("config.php");

    session_regenerate_id();

    echo session_id();

    var_dump($_SESSION);

?>