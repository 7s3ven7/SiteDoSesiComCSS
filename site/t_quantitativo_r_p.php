<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantitativo</title>
</head>
<?php
    $nome = $_GET['nome'];
    function redirect(){
        global $nome;
        if(isset($_GET['nome_atividade'])){
            $nome_atividade = $_GET['nome_atividade'];
            echo $nome.'&nome_atividade='.$nome_atividade;
        }else{
            echo $nome;
        }
    }
    function cadastro(){
        global $conexao;
        $v1 = $_POST['1'];
        $v2 = $_POST['2'];
        $v3 = $_POST['3'];
        $v4 = $_POST['4'];
        $v5 = $_POST['5'];
        $v6 = $_POST['6'];
        $v7 = $_POST['7'];
        $v8 = $_POST['8'];
        $v9 = $_POST['9'];
        $v10 = $_POST['10'];
        $v11 = $_POST['11'];
        $v12 = $_POST['12'];
        $v13 = $_POST['13'];
        $sql = 'SELECT `CNPJ_f` FROM `fornecedor_p` WHERE `nome_f` = '.$v5.';';
        $result = $conexao ->query($sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $CNPJ_f = $row['0'];
        }
        $sql = 'SELECT `CNPJ_e` FROM `empresa_p` WHERE `nome_e` = '.$v2.';';
        $result = $conexao ->query($sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $CNPJ_e = $row['0'];
        }
        $sql = 'SELECT `quant_und`,`quant_prod`,`und`,`nome_prod` FROM `produto_p` WHERE `lote` = '.$v12.';';
        $result = $conexao ->query($sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $quant_und = $row['0'];
            $quant_prod = $row['1'];
            $und = $row['2'];
            $nome_prod = $row['3'];
        }
        $SQL = 'INSERT INTO `quantitativo_r_p` (`tipo_contai`, `CNPJ_f`, `temperatura`, `lote`, `IMO`, `modelo_contai`, `nome_e`, `navio`, `cod_forne`, `quant_und`, `lacre_SIF`, `nome_f`, `lacre`, `quant_prod`, `und`, `nome_p`, `CNPJ_e`, `n_ONU`, `id_atividade`)
        VALUES ("'.$v6.'", "'.$CNPJ_f.'", "'.$v9.'", "'.$v12.'", "'.$v10.'", "'.$v3.'", "'.$v2.'", "'.$v4.'", "'.$v1.'", "'.$quant_und.'", "'.$v8.'", "'.$v5.'","'.$v7.'", "'.$quant_prod.'", "'.$und.'", "'.$nome_prod.'", "'.$CNPJ_e.'", "'.$v11.'", "'.$_GET['nome_atividade'].'");';
        $resultado = $conexao->query($SQL);
        $conexao->close();
    }
    $hostname = "127.0.0.1";
    $name = "u935055604_wesley";
    $password = "XwZX1383";
    $DB = "u935055604_dados";
    $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB

    if ($conexao->connect_errno) {
       echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
       exit();
    } else {
    if(isset($_POST["1"]) && isset($_POST["2"]) && isset($_POST["3"]) && isset($_POST["4"]) && isset($_POST["5"]) && isset($_POST["6"]) && isset($_POST["7"]) && isset($_POST["8"]) && isset($_POST["9"]) && isset($_POST["10"]) && isset($_POST["11"]) && isset($_POST["12"]) && isset($_POST["13"])){
        cadastro();
    }
    }
?>

<body>
    <div class='caixa-menu-geral'>
        <div class='espaco'></div>
        <details>
            <summary>Criações</summary>
            <form method='POST' action='t_turma.php?nome=<?php redirect()?>'>
                <input class='botao-sumario' type='submit' value='Turmas'>
            </form>
            <form method='POST' action='t_atividade.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Atividade'>
            </form>
        </details>
        <details>
            <summary>Cadastros</summary>
            <form method='POST' action='t_fornecedor_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Fornecedor'>
            </form>
            <form method='POST' action='t_empresa_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Empresa'>
            </form>
            <details>
                <summary>Cliente</summary>
                <form method='POST' action='t_cliente_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Cadastro'>
                </form>
                <form method='POST' action='t_pedido_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Pedido'>
                </form>
            </details>
        </details>
        <details>
            <summary>Produto</summary>
            <form method='POST' action='t_produto_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Cadastro'>
            </form>
        </details>
        <details>
            <summary>Recebimento</summary>
            <form method='POST' action='t_quantitativo_r_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_r_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
        <details>
            <summary>Expedição</summary>
            <form method='POST' action='t_quantitativo_e_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_e_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
    </div>
    <div class="menu">Menu</div>
    <div class='caixa-tela-informacao-geral'>
        <div class="texto-central2-principal-quantitativo-r-p">Digite a parte quantitativa de recebimento</div>
        <form method="POST" action="t_quantitativo_r_p.php?nome=<?php redirect(); ?>">
            <table class="tabela_quantitativo_e_p">
                <tr>
                    <td class="texto-central-quantitativo-e-p">Código do fornecedor: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="1" placeholder="1234">
                    </td>
                    <td class="texto-central-quantitativo-e-p">Nome da empresa: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="2" placeholder="Aplle">
                    </td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Modelo do container: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="3"
                            placeholder="SENU-123456-2"></td>
                    <td class="texto-central-quantitativo-e-p">Navio: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="4" placeholder="Titanaique">
                    </td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Nome do fornecedor: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="5" placeholder="Aplle">
                    </td>
                    <td class="texto-central-quantitativo-e-p">Tipo do container: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="6" placeholder="2201">
                    </td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Lacre: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="7" placeholder="Lacre">
                    </td>
                    <td class="texto-central-quantitativo-e-p">Lacre SIF: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="8" placeholder="SIF"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Temperatura: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="9" placeholder="Temperatura">
                    </td>
                    <td class="texto-central-quantitativo-e-p">IMO: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="10" placeholder="IMO">
                    </td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Número ONU: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="11" placeholder="Número">
                    </td>
                    <td class="texto-central-quantitativo-e-p">Lotes: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="12" placeholder="A1"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">CNPJ do destinatário: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ">
                    </td>
                </tr>
            </table>
            <input class="botao-central-enviar-quant-e-p" type="submit" value="Enviar" name="enviar">
        </form>
    </div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>

</html>