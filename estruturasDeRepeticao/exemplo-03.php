<?php

    //Uso de tags html junto ao PHP
    echo "<select>";    //Tag que cria um menu de opções ao usuário

    for($i = date("Y"); $i >= date("Y") - 100; $i--){

        echo '<option value="'.$i.'">'.$i.'</option>';  //passa os valores para a tag select e define o que será mostrado para o usuário

    }

    echo "</select";
    
?>