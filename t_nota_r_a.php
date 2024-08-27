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
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Nome/Empresa </div><div class="td-t-nota-r-a-valor">'.$nome_e.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CNPJ/Empresa </div><div class="td-t-nota-r-a-valor">'.$CNPJ_e.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CEP/Empresa </div><div class="td-t-nota-r-a-valor">'.$CEP_e.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CSP</div><div class="td-t-nota-r-a-valor">'.$CSP.'</div></td>    
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Nome/Motorista </div><div class="td-t-nota-r-a-valor">'.$nome_motorista.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CPF/Motorista </div><div class="td-t-nota-r-a-valor">'.$CPF_motorista.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Placa/Veiculo </div><div class="td-t-nota-r-a-valor">'.$placa_vei.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Modelo/Veiculo </div><div class="td-t-nota-r-a-valor">'.$modelo_vei.'</div></td>
                    </tr>


cep tel cnpj cod


                    <tr>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Eixos </div><div class="td-t-nota-r-a-valor">'.$eixos.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Atividade </div><div class="td-t-nota-r-a-valor">'.$id_atividade.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CEP/fornecedor </div><div class="td-t-nota-r-a-valor">'.$CEP_f.'</div></td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Lote </div><div class="td-t-nota-r-a-valor">'.$lote.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CSP </div><div class="td-t-nota-r-a-valor">'.$CSP.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Tel/fornecedor </div><div class="td-t-nota-r-a-valor">'.$fone_f.'</div></td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Motorista </div><div class="td-t-nota-r-a-valor">'.$nome_motorista.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CPF/motorista </div><div class="td-t-nota-r-a-valor">'.$CPF_motorista.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CFOP </div><div class="td-t-nota-r-a-valor">'.$CFOP.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CNPJ/fornecedor </div><div class="td-t-nota-r-a-valor">'.$CNPJ_f.'</div></td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Placa </div><div class="td-t-nota-r-a-valor">'.$placa_vei.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">PBT </div><div class="td-t-nota-r-a-valor">'.$PBT.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">dunf </div><div class="td-t-nota-r-a-valor">'.$dunf.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">modelo veiculo </div><div class="td-t-nota-r-a-valor">'.$modelo_vei.'</div></td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">CEP </div><div class="td-t-nota-r-a-valor">'.$CEP_e.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">NCM </div><div class="td-t-nota-r-a-valor">'.$NCM.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Data emitida </div><div class="td-t-nota-r-a-valor">'.$data_emi.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Unidade </div><div class="td-t-nota-r-a-valor">'.$und.'</div></td>
                    </tr>
                    <tr>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Qnt. da unidade </div><div class="td-t-nota-r-a-valor">'.$quant_und.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Qnt. do produto </div><div class="td-t-nota-r-a-valor">'.$quant_prod.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Código do fornecedor </div><div class="td-t-nota-r-a-valor">'.$cod_f.'</div></td>
                    <td class="td-t-nota-r-a"><div class="td-t-nota-r-a-texto">Valor unitário </div><div class="td-t-nota-r-a-valor">'.$valor_und.'</div></td>
                    </tr>
            </table>';
        }else{
            echo "<div class='error'>A nota fiscal a qual você procura não existe</div>";
        }
    }
    $hostname = "127.0.0.1";
    $name = "u935055604_wesley";
    $password = "XwZX1383";
    $DB = "u935055604_dados";

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
        <form method="POST" action="t_controle_a.php?nome=<?php redirect()?>">
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