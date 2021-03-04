<?php

    setlocale(LC_ALL, "portuguese", "pt_BR", 'pt_BR.utf-8', 'pt_BR.utf-8');

    echo ucwords(utf8_encode(strftime("%A %B")));

?>