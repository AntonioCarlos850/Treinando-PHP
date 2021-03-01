<?php

    $frase = "A repetição é a mãe da retenção";
    $palavra = "mãe";

    $q = strpos($frase, $palavra); //procura na string(primeira) o conteúdo de outra string(segunda)

    $texto = substr($frase, 0, $q); //faz com que a variavel receba o valor da variável de parâmetro a partir da posiçao indicada
    // até encontrar o parâmetro indicado

    var_dump($texto);

    $texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); //strlen retorna um int do tamanho da string

    echo "<br>";

    var_dump($texto2);

?>