<!DOCTYPE html>

<head></head>

<body><?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
if ($conexao->connect_errno) {
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    exit();
} else {
    $n_pedido = $_POST['n_pedido'];
    $SQL = 'SELECT * FROM `quantitativo_recebimento_p` 
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
		header("Location: ../../HTML/Aluno/qualitativo.html");
		exit();
	}
}
echo '<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html";charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
</head>

<body>
<div id="tipo">Aluno</div>
<div class="fundo"></div>
<details class="details-all">
    <summary class="details-big">Menus</summary>
    <form action="../../HTML/Aluno/tela.html">
        <input class="details-small" type="submit" value="Inicio">
    </form>
    <form action="../../HTML/index.html">
        <input class="details-small" type="submit" value="Sair">
    </form>
</details>
<details class="details-all">
    <summary class="details-big">Recebimento</summary>
    <form action="../../PHP/aluno/quantitativo.php">
        <input class="details-small" type="submit" value="Quantitativo">
    </form>
    <form action="../../PHP/aluno/qualitativo.php">
        <input class="details-small" type="submit" value="Qualitativo">
    </form>
</details>
<details class="details-all">
    <summary class="details-big">Movimentação</summary>
    <form action="../../PHP/aluno/movimentacao.php">
        <input class="details-small" type="submit" value="Movimentação"></summary>
    </form>
</details>
<details class="details-all">
    <summary class="details-big">Estoque</summary>
    <form action="tela.html">
        <input class="details-small" type="submit" value="WIP">
    </form>
    <form action="tela.html">
        <input class="details-small" type="submit" value="WIP">
    </form>
</details>
<details class="details-all">
    <summary class="details-big">Picking</summary>
    <form action="tela.html">
        <input class="details-small" type="submit" value="WIP">
    </form>
    <form action="tela.html">
        <input class="details-small" type="submit" value="WIP">
    </form>
</details>
<details class="details-all">
    <summary class="details-big">Expedição</summary>
    <form action="tela.html">
        <input class="details-small" type="submit" value="WIP">
    </form>
    <form action="tela.html">
        <input class="details-small" type="submit" value="WIP">
    </form>
</details>
<details class="details-all">
    <summary class="details-big">Relatórios</summary>
    <form action="tela.html">
        <input class="details-small" type="submit" value="WIP">
    </form>
    <form action="tela.html">
        <input class="details-small" type="submit" value="WIP">
    </form>
</details>
<details class="details-all">
    <summary class="details-big">Controle</summary>
    <form action="../../PHP/aluno/docas_receb.php">
        <input class="details-small" type="submit" value="Doca">
    </form>
</details>
<div class="menu">Menu</div>
<div class="caixa">
        <form method="POST" action="../../PHP/Aluno/action_qualitativo.php">
            <table class="tabela-2">
                <tr>
                    <td><div class="texto2">Código Interno:</div></td>
                    <td>'.$row['cod_inter'].'</td>
                    <td><div class="texto2">Código do fornecedor: </div></td>
                    <td>'.$row['cod_forne'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Nome da empresa: </div></td>
                    <td>'.$row['nome_empre'].'</td>
                    <td><div class="texto2">CNPJ da empresa: </div></td>
                    <td>'.$row['CNPJ_empre'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Modelo do container: </div></td>
                    <td>'.$row['modelo_conta'].'</td>
                    <td><div class="texto2">Navio: </div></td>
                    <td>'.$row['navio'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Destinatário: </div></td>
                    <td>'.$row['CNPJ_dest'].'</td>
                    <td><div class="texto2">Tipo do container: </div></td>
                    <td>'.$row['tipo_container'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Lacre: </div></td>
                    <td>'.$row['lacre'].'</td>
                    <td><div class="texto2">Lacre SIF: </div></td>
                    <td>'.$row['lacre_SIF'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Temperatura: </div></td>
                    <td>'.$row['temperatura'].'</td>
                    <td><div class="texto2">IMO: </div></td>
                    <td>'.$row['IMO'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Número ONU: </div></td>
                    <td>'.$row['n_ONU'].'</td>
                    <td><div class="texto2">Nome do produto: </div></td>
                    <td>'.$row['nome_prod'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Unidades: </td>
                    <td>'.$row['und'].'</td>
                    <td><div class="texto2">Quantidade de produto: </div></td>
                    <td>'.$row['quant_produto'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Quantidade do unidade: </div></td>
                    <td>'.$row['quant_und'].'</td>
                    <td><div class="texto2">Lotes: </div></td>
                    <td>'.$row['lote'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">CNPJ do destinatário: </div></td>
                    <td>'.$row['CNPJ_dest'].'</td>
                    <td><div class="texto2">Número do pedido: </div></td>
                    <td>'.$row['n_nota'].'</td>
                </tr>          
                <tr>
                    <td>Container bem desgastado: </td>
                    <td><input class="check" type="checkbox" name="1"</td>
                    <td>Avaria na lateral direita: </td>
                    <td><input class="check" type="checkbox" name="2"</td>
                </tr>
                    <tr>
                    <td>Avaria na lateral esquerda: </td>
                    <td><input class="check" type="checkbox" name="3"</td>
                    <td>Avaria no teto: </td>
                    <td><input class="check" type="checkbox" name="4"</td>
                </tr>
                <tr>
                    <td>Avaria na frente: </td>
                    <td><input class="check" type="checkbox" name="5"</td>
                    <td>Sem lacre </td>
                    <td><input class="check" type="checkbox" name="6"</td>
                </tr>
                <tr>
                    <td>Adesivos avariados: </td>
                    <td><input class="check" type="checkbox" name="7"</td>
                    <td>Excesso de altura: </td>
                    <td><input class="check" type="checkbox" name="8"</td>
                </tr>
                <tr>
                    <td>Excesso na direita: </td>
                    <td><input class="check" type="checkbox" name="9"</td>
                    <td>Excesso na esquerda: </td>
                    <td><input class="check" type="checkbox" name="10"</td>
                </tr>
                <tr>
                    <td>Excesso frontal: </td>
                    <td><input class="check" type="checkbox" name="11"</td>
                    <td>Painel avariado: </td>
                    <td><input class="check" type="checkbox" name="12"</td>
                </tr>
                <tr>
                    <td>Sem cabo de energia: </td>
                    <td><input class="check" type="checkbox" name="13"</td>
                    <td>Sem lona: </td>
                    <td><input class="check" type="checkbox" name="14"</td>
                </tr>
                <tr>
                    <td>canhoto assinado: </td>
                    <td><input class="check" type="checkbox" name="15"</td>
                    <td>volume_correto: </td>
                    <td><input class="check" type="checkbox" name="16"</td>
                </tr>
                <tr>
                    <td>Atraso: </td>
                    <td><input class="check" type="checkbox" name="17"</td>
                    <td>Observações: </td>
                    <td><input class="botao-tabela" type="text" name="18"</td>
                </tr>

            </table>
            <input class="botao-2" type="submit" value="Enviar" left=5px>
        </form>
    </div>
</body>
</html>';
?>