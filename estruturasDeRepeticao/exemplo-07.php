<?PHP

    $valorTotal = 100;
    $desconto = .9;

    do{ //Exemplo de uso do do while, que executa pelo menos uma vez antes de verifiar se a condição é verdadeira

        $valorTotal *= $desconto;

    }while($valorTotal > 100);

    echo "Valor total: " . $valorTotal 

?>