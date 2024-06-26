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
    $SQL = 'SELECT * FROM `quantitativo_r_p` 
    WHERE `id_quanti_r` = '.$n_pedido.';';
    //Inserir no DB
    $resultado = $conexao->query($SQL); //Envia para a tela de Login ao Cadastrar
    if($resultado->num_rows != 0) //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
	{
		for($i=1;$i<=$resultado->num_rows;$i++){
			$row = $resultado -> fetch_array();
		}
	} else {
		$conexao -> close();
		header("Location: t_qualitativo_r_a.php");
		exit();
	}
}
echo '<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html";charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
</head>

<body>
    <div id="tipo">Aluno</div>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Inicio">
        </form>
        <form action="index.php">
            <input class="details-small" type="submit" value="Sair">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_a.php">
            <input class="details-small" type="submit" value="Qualitativo">
        </form>
        <form action="t_quantitativo_a.php">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Controle</summary>
        <form action="t_docas_r_a.php">
            <input class="details-small" type="submit" value="Controle">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Estoque</summary>
        <form action="t_estoque_a.php">
            <input class="details-small" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Picking</summary>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Quantitativo (WIP)">
        </form>

    </details>
    <details class="details-all">
        <summary class="details-big">Relatórios</summary>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>

    <div class="menu">Menu</div>
<div class="caixa">
        <form method="POST" action="c_qualitativo_r_a.php">
            <table class="tabela-2">
                <tr>
                    <td><div class="texto2">Código Interno:</td>
                    <td><div class="espaco">'.$row['cod_inter'].'</div></td>
                    <td><div class="texto2">Código do fornecedor:</td>
                    <td><div class="espaco">'.$row['cod_forne'].'</div></td>
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
                    <td>Container Bem Desgastado: </td>
                    <td><input class="check" type="checkbox" name="1"</td>
                    <td>Avaria na Lateral Direita: </td>
                    <td><input class="check" type="checkbox" name="2"</td>
                </tr>
                    <tr>
                    <td>Avaria na Lateral Esquerda: </td>
                    <td><input class="check" type="checkbox" name="3"</td>
                    <td>Avaria no Teto: </td>
                    <td><input class="check" type="checkbox" name="4"</td>
                </tr>
                <tr>
                    <td>Avaria na Frente: </td>
                    <td><input class="check" type="checkbox" name="5"</td>
                    <td>Sem Lacre </td>
                    <td><input class="check" type="checkbox" name="6"</td>
                </tr>
                <tr>
                    <td>Adesivos Avariados: </td>
                    <td><input class="check" type="checkbox" name="7"</td>
                    <td>Excesso de Altura: </td>
                    <td><input class="check" type="checkbox" name="8"</td>
                </tr>
                <tr>
                    <td>Excesso na Direita: </td>
                    <td><input class="check" type="checkbox" name="9"</td>
                    <td>Excesso na Esquerda: </td>
                    <td><input class="check" type="checkbox" name="10"</td>
                </tr>
                <tr>
                    <td>Excesso Frontal: </td>
                    <td><input class="check" type="checkbox" name="11"</td>
                    <td>Painel Avariado: </td>
                    <td><input class="check" type="checkbox" name="12"</td>
                </tr>
                <tr>
                    <td>Sem Cabo de Energia: </td>
                    <td><input class="check" type="checkbox" name="13"</td>
                    <td>Sem Lona: </td>
                    <td><input class="check" type="checkbox" name="14"</td>
                </tr>
                <tr>
                    <td>Canhoto Assinado: </td>
                    <td><input class="check" type="checkbox" name="15"</td>
                    <td>Volume Correto: </td>
                    <td><input class="check" type="checkbox" name="16"</td>
                </tr>
                <tr>
                    <td>Atraso: </td>
                    <td><input class="check" type="checkbox" name="17"</td>
                    <td>Código Avariado: </td>
                    <td><input class="check" type="checkbox" name="18"</td>
                </tr>
                <tr>
                    <td>Item Lacrado: </td>
                    <td><input class="check" type="checkbox" name="19"</td>
                </tr>

            </table>
            <input class="botao-qualitat" type="submit" value="Enviar" left=5px>
        </form>
    </div>
</body>
</html>';
?>