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
        if(isset($_GET['enviar'])){
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
/*      $v14 = $_POST['14']; //nome_produto
        $v15 = $_POST['15']; //und
        $v16 = $_POST['16']; //quant_produto
        $v17 = $_POST['17']; //quant_und
        $v18 = $_POST['18']; //lote
        $v19 = $_POST['19']; //CNPJ_fonecedor
        $v20 = $_POST['20']; //código_nota
*/
        $SQL = 'INSERT INTO `quantitativo_r_p` (`cod_forne`,`nome_e`,`modelo_contai`,`navio`,`nome_f`,`tipo_contai`,`lacre`,`lacre_SIF`,`temperatura`,`IMO`,`n_ONU`,`lote`,`CNPJ_d`) 
        VALUES ('.$v1.','.$v2.','.$v3.','.$v4.','.$v5.','.$v6.','.$v7.','.$v8.','.$v9.','.$v10.','.$v11.','.$v12.','.$v13.');';
        //Inserir no DB
        $resultado = $conexao->query($SQL);

        $conexao->close();
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
    <div class="caixa-principal-quantitativo-r-p">
    
            <form method="POST" action="t_quantitativo_r_p.php">
            <table class="">
                <tr>
                    <td class="texto-central-quantitativo-r-p">Código do fornecedor: </td>
                    <td><input class="" type="text" name="1" placeholder="1234"></td>
                    <td class="texto-central-quantitativo-r-p">Nome da empresa: </td>
                    <td><input class="" type="text" name="2" placeholder="Aplle"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-r-p">Modelo do container: </td>
                    <td><input class="" type="text" name="3" placeholder="SENU-123456-2"></td>
                    <td class="texto-central-quantitativo-r-p">Navio: </td>
                    <td><input class="" type="text" name="4" placeholder="Titanaique"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-r-p">Nome do fornecedor: </td>
                    <td><input class="" type="text" name="5" placeholder="Aplle"></td>
                    <td class="texto-central-quantitativo-r-p">Tipo do container: </td>
                    <td><input class="" type="text" name="6" placeholder="2201"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-r-p">Lacre: </td>
                    <td><input class="" type="text" name="7" placeholder="Lacre"></td>
                    <td class="texto-central-quantitativo-r-p">Lacre SIF: </td>
                    <td><input class="" type="text" name="8" placeholder="SIF"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-r-p">Temperatura: </td>
                    <td><input class="" type="text" name="9" placeholder="Temperatura"></td>
                    <td class="texto-central-quantitativo-r-p">IMO: </td>
                    <td><input class="" type="text" name="10" placeholder="IMO"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-r-p">Número ONU: </td>
                    <td><input class="" type="text" name="11" placeholder="Número"></td>
                    <td class="texto-central-quantitativo-r-p">Lotes: </td>
                    <td><input class="" type="text" name="12" placeholder="A1"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-r-p">CNPJ do destinatário: </td>
                    <td><input class="" type="text" name="13" placeholder="CNPJ"></td>
                </tr>
            </table>
        </form>
    <input class="" type="submit" value="Enviar" name="enviar">
 </div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>

</html>