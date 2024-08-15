<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    function exibir(){
        global $conexao;
        $slq = 'SELECT * FROM `nota_r_p` WHERE `n_nota_r` = "'.$_POST['nota'].'"';
        $resultado = $conexao->query($slq);
        if($resultado->num_rows > 0){
            $row = mysqli_fetch_array($resultado);
            $CNPJ_e = $row['1'];
            $eixos = $row['2'];
            $id_atividade = $row['3'];
            $CEP_f = $row['4'];
            $lote = $row['5'];
            $nome_e = $row['6'];
            $CSP = $row['7'];
            $fone_f = $row['8'];
            $nome_motorista = $row['9'];
            $CPF_motorista = $row['10'];
            $CFOP = $row['11'];
            $CNPJ_f = $row['12'];
            $placa_vei = $row['13'];
            $PBT = $row['14'];
            $dunf = $row['15'];
            $modelo_vei = $row['16'];
            $CEP_e = $row['17'];
            $NCM = $row['18'];
            $data_emi = $row['19'];
            $und = $row['20'];
            $quant_und = $row['21'];
            $quant_prod = $row['22'];
            $cod_f = $row['23'];
            $valor_und = $row['24'];
            echo'<table class="tabela-t-nota-r-a">
                    <tr>
                    <td class="td-t-nota-r-a">'.$CNPJ_e.'</td>
                    <td class="td-t-nota-r-a">'.$eixos.'</td>
                    <td class="td-t-nota-r-a">'.$id_atividade.'</td>
                    <td class="td-t-nota-r-a">'.$CEP_f.'</td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a">'.$lote.'</td>
                    <td class="td-t-nota-r-a">'.$nome_e.'</td>
                    <td class="td-t-nota-r-a">'.$CSP.'</td>
                    <td class="td-t-nota-r-a">'.$fone_f.'</td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a">'.$nome_motorista.'</td>
                    <td class="td-t-nota-r-a">'.$CPF_motorista.'</td>
                    <td class="td-t-nota-r-a">'.$CFOP.'</td>
                    <td class="td-t-nota-r-a">'.$CNPJ_f.'</td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a">'.$placa_vei.'</td>
                    <td class="td-t-nota-r-a">'.$PBT.'</td>
                    <td class="td-t-nota-r-a">'.$dunf.'</td>
                    <td class="td-t-nota-r-a">'.$modelo_vei.'</td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a">'.$CEP_e.'</td>
                    <td class="td-t-nota-r-a">'.$NCM.'</td>
                    <td class="td-t-nota-r-a">'.$data_emi.'</td>
                    <td class="td-t-nota-r-a">'.$und.'</td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a">'.$quant_und.'</td>
                    <td class="td-t-nota-r-a">'.$quant_prod.'</td>
                    <td class="td-t-nota-r-a">'.$cod_f.'</td>
                    <td class="td-t-nota-r-a">'.$valor_und.'</td>
                    </tr>
            </table>';
        }else{
            echo "<div class='error'>A nota fiscal a qual você procura não existe</div>";
        }
    }
    $hostname = "127.0.0.1";
    $name = "root";
    $password = "root";
    $DB = "dados";

    $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
    if ($conexao->connect_errno) {
        echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
        exit();
    }
        ?>

<body>
    <div class="caixa-menu-geral"></div>
    <div class="menu">Menu</div>
    <div class="conta-geral">Aluno - <?php echo $nome;?></div>
    <div class='espaco'></div>
    <details class='details'>
        <summary class="sumario">Recebimento</summary>
        <form method="POST" action="t_nota_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo">
        </form>
        <form method="POST" action="t_quantitativo_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Controle</summary>
        <form method="POST" action="t_docas_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Controle">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Estoque</summary>
        <form method="POST" action="t_estoque_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Picking</summary>
        <form method="POST" action="t_picking_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Expedição</summary>
        <form method="POST" action="t_nota_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo (WIP)">
        </form>
        <form method="POST" action="t_quantitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Relatórios</summary>
        <form method="POST" action="t_relatorios_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>

    <div class="caixa-tela-informacao-geral">
        <form method="POST" action="t_nota_r_a.php?nome=<?php redirect()?>">
            <input type="number" name="nota">
            <input type="submit" name="submit-nota">
        </form>
        <?php if(isset($_POST["nota"])){exibir();} ?>
    </div>
    </div>