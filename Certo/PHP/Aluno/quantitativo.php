<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html" ;charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
</head>

<body><?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$n_pedido ="544";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
if ($conexao->connect_errno) {
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    header("Location: ../../HTML/Aluno/recebimento.html");
    exit();
} else {
    $SQL = 'SELECT * FROM `quantitava_expedicao_p` 
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
		exit();
	}
}
echo '
    <div class="menu">Menu</div>
    <form action="../../HTML/Aluno/recebimento.html">
        <input class="botao" type="submit" value="Recebimento">
    </form>
    <div class="caixa-botao-mini">
        <form action="qualitativo.php">
            <input class="botao-mini" type="submit" value="Qualitativo">
        </form>
    </div>
    <div class="caixa-botao-mini">
    <form action="quantitativo.php">
        <input id="botao-mini" type="submit" value="Quantitativo">
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
<form method="POST" action="quantitativo.php">
    <div class="texto5">Número do pedido:
        <form action="controle.html">
            <input class="botao-tabela2" type="text" name="n_pedido">
        </form>
        </form>
    </div>
    <div class="texto5">Número da nota:
        <br>
        Doca:
    </div>
</body>

</html>';
$pesquisar = $_POST['num_pedido'];
echo $pesquisar;
$SQL = 'SELECT * FROM `produto_p`
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
                <td>
                    <div class="texto3">Produto: '.$row['nome'].'</div>
                </td>
                <td>
                    <div class="texto3">Unidade: '.$row['und'].'</div>
                </td>
                <td>
                    <div class="texto3">Quantidade de Unidades: '.$row['quantidade_und'].'</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="texto3">Valor por Unidade: '.$row['valor_und'].'</div>
                </td>
                <td>
                    <div class="texto3">Quantidade de Produtos: '.$row['quant_prod'].'</div>
                </td>
                <td>
                    <div class="texto3">Valor total: '.$row['quantidade_und']*$row['valor_und'].'</div>
                </td>
            </tr>
        </div>
    </table>
    ';}}
    echo '<form method="POST" action="action_qualitativo.php">
        <input class="botao-2" type="submit" value="Enviar" left=5px>
    </form>';
    ?>