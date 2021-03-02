<?PHP

    $meses = array(
        "Janeiro", "Fevereiro", "Março", "Abril",
        "Maio", "Junho", "Julho", "Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro" 
    );

    
    foreach ($meses as $index => $mes){ //O foreach seignifica para cada, então nesse sexemplo para cada valor do array(mês)
                                        //o arquivo vai inserir a posição do array na primeira variável e o valor na segunda

        echo "O indice é: " . $index. "<br>";
        echo "O mês é: " . $mes . "<br><br>";

    }

    /* 
    foreach ($meses as $mes){               //exemplo de uso do foreach usando apenas o valor

        echo "O mês é: " . $mes . "<br>";

    }
    */

?>