<?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
$n_pedido = 2;
if ($conexao->connect_errno) {
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    exit();
} else {
    $SQL = 'SELECT * FROM `quantitava_p` 
    WHERE `n_pedido` = '.$n_pedido.';';
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
echo '<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="Certo/CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="menu">Menu</div>
    <form action="recebimento.html">
        <input class="botao" type="submit" value="Recebimento">
    </form>
    <div class="caixa-botao-mini">
        <form action="quantitativo.html">
            <input class="botao-mini" type="submit" value="Quantitativo">
        </form>
    </div>
    <div class="caixa-botao-mini">
        <form action="qualitativo.html">
            <input class="botao-mini" type="submit" value="Qualitativo">
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
    <div id="caixa">
        <form method="POST" action="../PHP/quantitativo.php">
            <table class="tabela-2" border=1px>
                <tr>
                    <td>Código Interno: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>Código do fornecedor: </td>
                    <td>'.$row['cod_forne'].'</td>
                </tr>
                <tr>
                    <td>Nome da empresa: </td>
                    <td>'.$row['nome_empre'].'</td>
                    <td>CNPJ da empresa: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                <tr>
                    <td>Modelo do container: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>Navio: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                <tr>
                    <td>Destinatário: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>Tipo do container: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                <tr>
                    <td>Lacre: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>Lacre SIF: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                <tr>
                    <td>Temperatura: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>IMO: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                <tr>
                    <td>Número ONU: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>Nome do produto: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                <tr>
                    <td>Unidades: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>Quantidade de produto: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                <tr>
                    <td>Quantidade do unidade: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>Lotes: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                <tr>
                    <td>CNPJ do destinatário: </td>
                    <td>'.$row['cod_inter'].'</td>
                    <td>Número do pedido: </td>
                    <td>'.$row['cod_inter'].'</td>
                </tr>
                
                <tr>
                    <td>a: </td>
                    <td><input class="check" type="checkbox" name="1"</td>
                    <td>Código do fornecedor: </td>
                    <td><input class="check" type="checkbox" name="2"</td>
                </tr>
                    <tr>
                    <td>Nome da empresa: </td>
                    <td><input class="check" type="checkbox" name="3"</td>
                    <td>CNPJ da empresa: </td>
                    <td><input class="check" type="checkbox" name="4"</td>
                </tr>
                <tr>
                    <td>Modelo do container: </td>
                    <td><input class="check" type="checkbox" name="5"</td>
                    <td>Navio: </td>
                    <td><input class="check" type="checkbox" name="6"</td>
                </tr>
                <tr>
                    <td>Destinatário: </td>
                    <td><input class="check" type="checkbox" name="7"</td>
                    <td>Tipo do container: </td>
                    <td><input class="check" type="checkbox" name="8"</td>
                </tr>
                <tr>
                    <td>Lacre: </td>
                    <td><input class="check" type="checkbox" name="9"</td>
                    <td>Lacre SIF: </td>
                    <td><input class="check" type="checkbox" name="10"</td>
                </tr>
                <tr>
                    <td>Temperatura: </td>
                    <td><input class="check" type="checkbox" name="11"</td>
                    <td>IMO: </td>
                    <td><input class="check" type="checkbox" name="12"</td>
                </tr>
                <tr>
                    <td>Número ONU: </td>
                    <td><input class="check" type="checkbox" name="13"</td>
                    <td>Nome do produto: </td>
                    <td><input class="check" type="checkbox" name="14"</td>
                </tr>
                <tr>
                    <td>Unidades: </td>
                    <td><input class="check" type="checkbox" name="15"</td>
                    <td>Quantidade de produto: </td>
                    <td><input class="check" type="checkbox" name="16"</td>
                </tr>
                <tr>
                    <td>Quantidade do unidade: </td>
                    <td><input class="check" type="checkbox" name="17"</td>
                    <td>Lotes: </td>
                    <td><input class="check" type="checkbox" name="18"</td>
                </tr>
                <tr>
                    <td>CNPJ do destinatário: </td>
                    <td><input class="check" type="checkbox" name="19"</td>
                    <td>Número do pedido: </td>
                    <td><input class="check" type="checkbox" name="20"</td>
                </tr>
            </table>
            <input class="botao-2" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>';?>