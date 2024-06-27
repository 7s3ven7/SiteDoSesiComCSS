<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantitativo</title>
</head>
<?php
    $nome_atividade = $_GET['nome_atividade'];
    $nome = $_GET['nome'];
?>
<?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB

if ($conexao->connect_errno) {
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    exit();
} else {
    $v1 = $_POST['1']; //cod_inter
    $v2 = $_POST['2']; //cod_forne
    $v3 = $_POST['3']; //nome_empre
    $v4 = $_POST['4']; //CNPJ_empre
    $v5 = $_POST['5']; //modelo_conta
    $v6 = $_POST['6']; //navio
    $v7 = $_POST['7']; //nome_fornecedor
    $v8 = $_POST['8']; //tipo_container
    $v9 = $_POST['9']; //lacre
    $v10 = $_POST['10']; //lacre_SIF
    $v11 = $_POST['11']; //temperatura
    $v12 = $_POST['12']; //IMO
    $v13 = $_POST['13']; //n_ONU
    $v14 = $_POST['14']; //nome_produto
    $v15 = $_POST['15']; //und
    $v16 = $_POST['16']; //quant_produto
    $v17 = $_POST['17']; //quant_und
    $v18 = $_POST['18']; //lote
    $v19 = $_POST['19']; //CNPJ_fonecedor
    $v20 = $_POST['20']; //código_nota

    $SQL = 'INSERT INTO `quantitativo_r_p` (`cod_forne`,`nome_e`,`CNPJ_e`,`modelo_contai`,`navio`,`nome_forne`,`tipo_container`,`lacre`,`lacre_SIF`,`temperatura`,`IMO`,`n_ONU`,`nome_p`,`und`,`quant_prod`,`quant_und`,`lote`,`CNPJ_f`) 
    VALUES ('.$v1.','.$v2.','.$v3.','.$v4.','.$v5.','.$v6.','.$v7.','.$v8.','.$v9.','.$v10.','.$v11.','.$v12.','.$v13.','.$v14.','.$v15.','.$v16.','.$v17.','.$v18.','.$v19.','.$v20.');';
    //Inserir no DB
    $resultado = $conexao->query($SQL);

    $conexao->close();
    header("Location: ../../HTML/Professor/quantitativo.html"); //Envia para a tela de Login ao Cadastrar
}
?>

<body>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Cadastros</summary>
        <form method="POST"
            action="t_fornecedor_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form method="POST"
            action="t_empresa_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form method="POST"
                action="t_cliente_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form method="POST" action="t_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="details-small" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="details-all">
        <summary class="details-big">Produto</summary>
        <form method="POST"
            action="t_produto_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form method="POST"
            action="t_quantitativo_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo"></div>
        </form>
        <form method="POST"
            action="t_nota_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form method="POST"
            action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form method="POST"
            action="t_nota_e_pr.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form action="t_nota_e_pr.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class="details-caixa"></div>
    <div class="menu">Menu</div>
    <div class="caixa">

        <form method="POST" action="c_quantitativo_r_p.php">
            <table class="tabela">
                <tr>
                    <td>Código do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="1" placeholder="1234"></td>
                    <td>Nome da empresa: </td>
                    <td><input class="botao-tabela" type="text" name="2" placeholder="Aplle"></td>
                </tr>
                <tr>
                    <td>Modelo do container: </td>
                    <td><input class="botao-tabela" type="text" name="3" placeholder="SENU-123456-2"></td>
                    <td>Navio: </td>
                    <td><input class="botao-tabela" type="text" name="4" placeholder="Titanaique"></td>
                </tr>
                <tr>
                    <td>Nome do destinatário: </td>
                    <td><input class="botao-tabela" type="text" name="5" placeholder="Aplle"></td>
                    <td>Tipo do container: </td>
                    <td><input class="botao-tabela" type="text" name="6" placeholder="2201"></td>
                </tr>
                <tr>
                    <td>Lacre: </td>
                    <td><input class="botao-tabela" type="text" name="7" placeholder="Lacre"></td>
                    <td>Lacre SIF: </td>
                    <td><input class="botao-tabela" type="text" name="8" placeholder="SIF"></td>
                </tr>
                <tr>
                    <td>Temperatura: </td>
                    <td><input class="botao-tabela" type="text" name="9" placeholder="Temperatura"></td>
                    <td>IMO: </td>
                    <td><input class="botao-tabela" type="text" name="10" placeholder="IMO"></td>
                </tr>
                <tr>
                    <td>Número ONU: </td>
                    <td><input class="botao-tabela" type="text" name="11" placeholder="Número"></td>
                    <td>Lotes: </td>
                    <td><input class="botao-tabela" type="text" name="12" placeholder="A1"></td>
                </tr>
                <tr>
                    <td>CNPJ do destinatário: </td>
                    <td><input class="botao-tabela" type="text" name="13" placeholder="CNPJ"></td>
                </tr>
            </table>
            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>
    <div id="tipo">Conta: <?php echo $nome;?></div>
</body>

</html>