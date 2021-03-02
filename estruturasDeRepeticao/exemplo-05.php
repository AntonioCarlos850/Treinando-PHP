<form>

    <input type="text" name="nome"> <!-- Usando de Inputs para enviar dados para o PHP, todo dado do input por padrão fica -->
    <input type="date" name="data">  <!-- armazenado na variável global $_GET -->
    <input type="submit" value="OK">

</form>

<?PHP

    if (isset($_GET)){  //Se a variável $_GET tiver algum conteúdo então irá entrar no bloco

        foreach ($_GET as $nome => $valor){ //foreach usando os dados do input para criar uma exibição do mesmo

            echo "Nome do campo: " . $nome . "<br>";
            echo "Valor do campo: " . $valor;
            echo "<hr>";

        }
    }

?>