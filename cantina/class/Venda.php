<?php

require_once ("conection.php");

class Venda extends Conexao
{

    protected $id;
    protected $idProduto;
    protected $valor;
    protected $nomeCliente;
    protected $dtData;
    protected $valorTroco;
    protected $valorRecebido;
    protected $nomeFuncionario;

    public function __construct($idProduto, $valor, $nomeCliente, $valorTroco, $valorRecebido, $nomeFuncionario)
    {
        $conn = Conexao::conecta();
        $this->idProduto = $idProduto;
        $this->valor = $valor;
        $this->nomeCliente = $nomeCliente;
        $this->valorTroco = $valorTroco;
        $this->valorRecebido = $valorRecebido;
        $this->nomeFuncionario = $nomeFuncionario;
        $stmt = $conn->prepare("INSERT INTO tb_venda (idProduto, valor, nomeCliente, valorTroco, valorRecebido,
            nomeFuncionario) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("idsdds",$idProduto,$valor,$nomeCliente,$valorTroco,$valorRecebido,$nomeFuncionario);
        $stmt->execute();
        $this->id = $conn->insert_id;
        $stmt = $conn->query("SELECT dtData FROM tb_venda WHERE id = $this->id");
        $this->dtData = $stmt->fetch_array()[0];
    }

    public function deleteVenda($id){

        $conn = Conexao::conecta();
        $stmt = $conn->prepare("DELETE FROM tb_venda WHERE id= ? "); 
        $stmt->bind_param('i',$id);
        $stmt->execute();   
        echo "Produto excluido com sucesso<hr>";

    }

    public static function mostrarListaVenda()
    {
        $conn = Conexao::conecta();

        $retorno = "<ol>";

        $stmt = $conn->query("SELECT * FROM tb_venda ORDER BY id");

        while($dados = mysqli_fetch_array($stmt)){

            $retorno.="<li>";

            $retorno.="Id: ".$dados['id']."<br>"." idProduto: ".$dados['idProduto']."<br>"."  Valor: ".$dados['valor']."<br>"
            ."  NomeCliente: ".$dados['nomeCliente']."<br>"."   Data: ".$dados['dtData']."<br>"."   Valor Recebido: ".
            $dados['valorRecebido']."<br>"."  Valor Troco: ".$dados['valorTroco']."<br>"."   Nome Funcionario: ".
            $dados['nomeFuncionario']."<br>";

            $retorno.="</li>";
            $retorno.="<hr>";
        }

        $retorno.="</ol>";

        return $retorno;

    }

    public static function mostrarUmaVenda($id){

        $conn = Conexao::conecta();

        $stmt = $conn->query("SELECT * FROM tb_venda WHERE id = $id");

        $retorno = "";

        while($dados = mysqli_fetch_assoc($stmt)){


            $retorno.="Id: ".$dados['id']."<br>"." idProduto: ".$dados['idProduto']."<br>"."  Valor: ".$dados['valor']."<br>"
            ."  NomeCliente: ".$dados['nomeCliente']."<br>"."   Data: ".$dados['dtData']."<br>"."   Valor Recebido: ".
            $dados['valorRecebido']."<br>"."  Valor Troco: ".$dados['valorTroco']."<br>"."   Nome Funcionario: ".
            $dados['nomeFuncionario']."<br>";

            $retorno.="<hr>";
        }


        return $retorno;
    }

    /*
    public function __destruct(){

        $conn = Conexao::conecta();
        $stmt = $conn->prepare("DELETE FROM tb_venda WHERE id= ? "); 
        $stmt->bind_param('i',$this->id);
        $stmt->execute();   
        echo "Produto excluido com sucesso<hr>";

    }
    */

    public function getId()
    {
        return $this->id;
    }


    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function getDtdata()
    {
        return $this->dtData;
    }

    public function getValorTroco()
    {
        return $this->valorTroco;
    }

    public function getValorRecebido()
    {
        return $this->valorRecebido;
    }

    public function getNomeFuncionario()
    {
        return $this->nomeFuncionario;
    }

    public function setId($id)
    {
        $conn = Conexao::conecta();
        $this->id = $id;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET id = ? WHERE id = ? ");
        $stmt->bind_param('ii',$id, $this->id);
        $stmt->execute();

    }

    public function setIdProduto($idProduto)
    {
        $conn = Conexao::conecta();
        $this->idProduto = $idProduto;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET idProduto = ? WHERE id = ? ");
        $stmt->bind_param('ii',$idProduto, $this->id);
        $stmt->execute();

    }

    public function setValor($valor)
    {
        $conn = Conexao::conecta();
        $this->valor = $valor;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET valor = ? WHERE id = ? ");
        $stmt->bind_param('di',$valor, $this->id);
        $stmt->execute();

    }

    public function setNomeCliente($nomeCliente)
    {
        $conn = Conexao::conecta();
        $this->nomeCliente = $nomeCliente;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET nomeCliente = ? WHERE id = ? ");
        $stmt->bind_param('si',$nomeCliente, $this->id);
        $stmt->execute();

    }

    public function setValorRecebido($valorRecebido)
    {
        $conn = Conexao::conecta();
        $this->valorRecebido = $valorRecebido;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET valorRecebido = ? WHERE id = ? ");
        $stmt->bind_param('di',$valorRecebido, $this->id);
        $stmt->execute();

    }

    public function setValorTroco($valorTroco)
    {
        $conn = Conexao::conecta();
        $this->valorTroco = $valorTroco;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET valorTroco = ? WHERE id = ? ");
        $stmt->bind_param('di',$valorTroco, $this->id);
        $stmt->execute();

    }

    public function setFuncionario($nomeFuncionario)
    {
        $conn = Conexao::conecta();
        $this->nomeFuncionario = $nomeFuncionario;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET nomeFuncionario = ? WHERE id = ? ");
        $stmt->bind_param('si',$nomeFuncionario, $this->id);
        $stmt->execute();

    }

    public function setDtData($dtData)
    {
        $conn = Conexao::conecta();
        $this->dtData = $dtData;
        $stmt = $conn->prepare("UPDATE tb_produto2 SET dtData = ? WHERE id = ? ");
        $stmt->bind_param('si',$dtData, $this->id);
        $stmt->execute();

    }

}
