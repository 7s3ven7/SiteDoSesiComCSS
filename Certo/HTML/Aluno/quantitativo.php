<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html";charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
</head>

<body><?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
$n_pedido = 544;
if ($conexao->connect_errno) {
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    exit();
} else {
    $SQL = 'SELECT * FROM `quantitava_expedicao_p_1` 
    WHERE `n_nota` = '.$n_pedido.';';
    //Inserir no DB
    $resultado = $conexao->query($SQL); //Envia para a tela de Login ao Cadastrar
    if($resultado->num_rows != 0) //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
	{
		for($i=1;$i<=$resultado->num_rows;$i++){
			$row = $resultado -> fetch_array();
		}
	} else {
		$conexao -> close();
		header("Location: index.php");
		exit();
	}
}
echo '
    <div class="menu">Menu</div>
    <form action="recebimento.html">
        <input id="botao" type="submit" value="Recebimento">
    </form>
    <div class="caixa-botao-mini">
        <form action="qualitativo.php">
            <input id="botao-mini" type="submit" value="Qualitativo">
        </form>
    </div>
    <div class="caixa-botao-mini">
    <form action="quantitativo.php">
        <input class="botao-mini" type="submit" value="Quantitativo">
    </form>
    </div>
    <form action="movimentacao.html">
        <input class="botao" type="submit" value="Movimentação">
    </form>
    <form action="estoque.html">
        <input class="botao" type="submit" value="Estoque">
    </form>
    <form action="picking.html">
        <input class="botao" type="submit" value="Picking">
    </form>
    <form action="expedicao.html">
        <input class="botao" type="submit" value="Expedição">
    </form>
    <form action="relatorios.html">
        <input class="botao" type="submit" value="Relatórios">
    </form>
    <br>
    <br>
    <form action="controle.html">
        <input class="botao" type="submit" value="Controle">
    </form>
    <div class="caixa">
';
echo '
<!DOCTYPE html>
<body>
<div class="texto4">Número do pedido:</div>
<div class="texto4">Número da nota:</div>
<div class="texto4">Doca:</div>
</body>
</html>';
            $n_pedido = 1;
            $SQL = 'SELECT * FROM `produto_p_1` 
                WHERE `n_pedido` = '.$n_pedido.';';
            $resultado = $conexao->query($SQL);
            if($resultado->num_rows != 0)
            {
                for($i=1;$i<=$resultado->num_rows;$i++){
                    $row = $resultado -> fetch_array();
                    echo '
                    <table class="tabela-4">
                    <div id="linha">
                    <hr class="linha">
                    <tr>
                    <td><div class="texto3">Produto: '.$row['nome'].'</div></td>
                    <td><div class="texto3">Unidade: '.$row['und'].'</div></td>
                    <td><div class="texto3">Quantidade de Unidades: '.$row['quantidade_und'].'</div></td>
                    </tr>
                    <tr>
                    <td><div class="texto3">Valor por Unidade: '.$row['valor_und'].'</div></td>
                    <td><div class="texto3">Quantidade de Produtos: '.$row['quant_prod'].'</div></td>
                    <td><div class="texto3">Valor total: '.$row['quantidade_und']*$row['valor_und'].'</div></td>
                    </tr>
                    </div>
                    </table>
';}}
echo '<form method="POST" action="../../PHP/Aluno/qualitativo.php">
<input class="botao-2" type="submit" value="Enviar" left=5px>
</form>';
?>