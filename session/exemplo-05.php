<?php

    require_once("config.php");

    echo session_save_path();   //local onde estão sendo salvas as sessões

    echo "<br>";

    var_dump(session_status()); //mostra o status da sessão

    switch(session_status()){

        case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas";
        break;

        case PHP_SESSION_NONE:
        echo "As sessões estão habilitadas, mas nenhuma existe";
        break;

        case PHP_SESSION_ACTIVE:
        echo "As sessões estão habilitadas, e uma existe";
        break;

    }

?>