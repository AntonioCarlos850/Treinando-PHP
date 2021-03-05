<?php

require_once("conection.php");

class Produto extends Conexao
{

    protected $nome;
    protected $valor;
    protected $id;
    protected $custo;
    protected $estoque;

    public function __construct($nome, $valor, $estoque, $custo)
    {
        $conn = Conexao::conecta();
        $this->nome = $nome;
        $this->valor = $valor;
        $this->estoque = $estoque;
        $this->custo = $custo;
        $stmt = $conn->prepare("INSERT INTO tb_produto2 (nome, valor, estoque, custo) VALUES (?,?,?,?)");
        $stmt->bind_param("sdid", $nome, $valor, $estoque, $custo);
        $stmt->execute();
        $this->id = $conn->insert_id;
    }

    public function deleteVenda($id)
    {

        $conn = Conexao::conecta();
        $stmt = $conn->prepare("DELETE FROM tb_produto2 WHERE id= ? ");
        $stmt->bind_param('i', $this->id);
        $stmt->execute();
        echo "Produto excluido com sucesso<hr>";
    }

    public static function mostrarListaProduto()
    {
        $conn = Conexao::conecta();

        $retorno = "<ol>";

        $stmt = $conn->query("SELECT * FROM tb_produto2 ORDER BY id");

        while ($dados = mysqli_fetch_array($stmt)) {

            $retorno .= "<li>";

            $retorno .= "Id: " . $dados['id'] . "<br>" . " Valor: " . $dados['valor']. "<br>". " Custo: " . $dados['custo']
            . "<br>"." Estoque: " . $dados['estoque']. "<br>". " Nome: " . $dados['nome']. "<br>";

            $retorno .= "</li>";
            $retorno .= "<hr>";
        }

        $retorno .= "</ol>";

        return $retorno;
    }

    public static function mostrarUmProduto($id){

        $conn = Conexao::conecta();

        $stmt = $conn->query("SELECT * FROM tb_produto2 WHERE id = $id");

        $retorno = "";

        while($dados = mysqli_fetch_assoc($stmt)){


            $retorno .= "Id: " . $dados['id'] . "<br>" . " Valor: " . $dados['valor']. "<br>". " Custo: " . $dados['custo']
            . "<br>"." Estoque: " . $dados['estoque']. "<br>". " Nome: " . $dados['nome']. "<br>";

            $retorno.="<hr>";
        }


        return $retorno;
    }

    /*
        public function __destruct(){

            $conn = Conexao::conecta();
            $stmt = $conn->prepare("DELETE FROM tb_produto2 WHERE id= ? "); 
            $stmt->bind_param('i',$this->id);
            $stmt->execute();   
            echo "Produto excluido com sucesso<hr>";

        }
        */

    public function getNome()
    {

        return $this->nome;
    }

    public function getId()
    {

        return $this->id;
    }

    public function getCusto()
    {

        return $this->custo;
    }

    public function getValor()
    {

        return $this->valor;
    }

    public function getEstoque()
    {

        return $this->estoque;
    }

    public function setNome($nome)
    {
        $conn = Conexao::conecta();
        $this->nome = $nome;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET nome = ? WHERE id = ? ");
        $stmt->bind_param('si', $nome, $this->id);
        $stmt->execute();
    }

    public function setCusto($custo)
    {

        $conn = Conexao::conecta();
        $this->custo = $custo;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET custo = ? WHERE id = ? ");
        $stmt->bind_param('di', $custo, $this->id);
        $stmt->execute();
    }

    public function setEstoque($estoque)
    {

        $conn = Conexao::conecta();
        $this->estoque = $estoque;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET estoque = ? WHERE id = ? ");
        $stmt->bind_param('ii', $estoque, $this->id);
        $stmt->execute();
    }

    public function setValor($valor)
    {

        $conn = Conexao::conecta();
        $this->valor = $valor;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET valor = ? WHERE id = ? ");
        $stmt->bind_param('di', $valor, $this->id);
        $stmt->execute();
    }
}
