<?php

    $link = "https://ava.ifpr.edu.br/pluginfile.php/1/core_admin/logo/0x150/1615254358/logo_ead.png";
    $content = file_get_contents($link);
    $parse = parse_url($link);
    $basename = basename($parse["path"]);

    $file = fopen($basename,"w+");

    fwrite($file,$content);
    fclose($file);

?>

<img src="<?=$basename?>">