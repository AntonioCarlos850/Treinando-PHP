<?php

    require_once ("config.php");

    /*
    $produto = new Produto("Batata",3.0,10,1.0);
    echo "Id: ".$produto->getId()."<br>";
    echo "Nome: ".$produto->getNome()."<br>";
    echo "Valor: ".$produto->getValor()."<br>";
    echo "Custo: ".$produto->getCusto()."<br>";
    echo "Estoque: ".$produto->getEstoque()."<br>";

    echo "===================================================================<br>";

    $produto->setNome("Coxinha");
    $produto->setValor(5.0);
    $produto->setCusto(3.0);
    $produto->setEstoque(500);

    echo "Id: ".$produto->getId()."<br>";
    echo "Nome: ".$produto->getNome()."<br>";
    echo "Valor: ".$produto->getValor()."<br>";
    echo "Custo: ".$produto->getCusto()."<br>";
    echo "Estoque: ".$produto->getEstoque()."<br>";
    echo "<br>";*/

    /*
    $venda = new Venda(61, 12.5, 'José', 5.5, 18, 'João');

    echo "Id: ".$venda->getId()."<br>";
    echo "Id Produto: ".$venda->getIdProduto()."<br>";
    echo "Valor: ".$venda->getValor()."<br>";
    echo "Nome Cliente: ".$venda->getNomeCliente()."<br>";
    echo "Nome Funcionário: ".$venda->getNomeFuncionario()."<br>";
    echo "Data: ".$venda->getDtdata();
    echo "Valor do troco: ".$venda->getValorTroco()."<br>";
    echo "Valor recebido: ".$venda->getValorRecebido()."<br>";
    */

    //echo Venda::mostrarListaVenda();
    //echo Produto::mostrarListaProduto()

    echo Venda::mostrarUmaVenda(9);
    echo Produto::mostrarUmProduto(61);

    //$venda->deleteVenda($venda->getId());


?>