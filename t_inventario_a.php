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
    </details>
    <details class="details">
        <summary class="sumario">Relatórios</summary>
        <form method="POST" action="t_relatorios_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>

    <div class="caixa-tela-informacao-geral">
        <form action="t_picking_a.php" method="POST">
            <div class="">
                <div class="">Digite o nome do produto</div>
                <input class="" type="text" name="nome_p">
                <input class="" type="submit">
                <div class="">
        </form>
        <?php
    session_start();
    if (isset($_POST['nome_p'])){
    $hostname = "127.0.0.1";
    $name = "u935055604_wesley";
    $password = "XwZX1383";
    $DB = "u935055604_dados";

        $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
        if ($conexao->connect_errno) {
            echo "Failed connection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
            header("Location: t_a.php");
            exit();
        } else {

            $nome= $_POST['nome_p'];

	        $sql="SELECT p.tipo,p.data_v,p.lote,p.nome_prod,p.marca_prod,p.und,p.quant_und,p.quant_prod,p.valor_und,p.kg,e.anguar,e.rua,e.coluna,e.andar,e.ap 
                FROM `produto_p` p
                JOIN `estoque` e ON p.cod_forne = e.cod_forne AND p.cod_inter = e.cod_inter
                WHERE p.nome_prod LIKE '%".$nome."%';";
	        $resultado = $conexao->query($sql);
            if($resultado->num_rows != 0){
                while($row = mysqli_fetch_array($resultado)){
                $s1 = $row['0'];//Tipo do produto
                $s2 = $row['1'];//Validade
                $s3 = $row['2'];//Lote
                $s4 = $row['3'];//Nome do produto
                $s5 = $row['4'];//Marca do produto
                $s6 = $row['5'];//Unidade
                $s7 = $row['6'];//Quantidade
                $s8 = $row['7'];//Quantidade unidade
                $s9 = $row['8'];//Valor unitário
                $s10 = $row['9'];//Peso
                $s11 = $row['10'];//Hangar
                $s12 = $row['11'];//Rua
                $s13 = $row['12'];//Coluna
                $s14 = $row['13'];//Andar
                $s15 = $row['14'];//Ap
                $s16 = $_SESSION['doca'];
                    if($s16 == 'V'){
                        $s16 = 1;
                    }elseif($s16 == 'F'){
                        $s16 = 2;
                    }
                echo '
                <hr>
                <table class="">
                    <tr>
                        <td class="">Doca:
                        <input class="" type="number" value="'.$s16.'" disabled></td>
                    </tr>
                    <tr>
                        <td class="">Nome do produto
                        <input class="" type="text" value="'.$s4.'" disabled></td>
                        <td class="">Tipo do produto
                        <input class="" type="text" value="'.$s1.'" disabled></td>
                        <td class="">Validade
                        <input class="" type="text" value="'.$s2.'" disabled></td>
                    </tr>
                    <tr>
                        <td class="">Lote
                        <input class="" type="text" value="'.$s3.'" disabled></td>
                        <td class="">Marca do Produto
                        <input class="" type="text" value="'.$s5.'" disabled></td>
                        <td class="">Peso
                        <input class="" type="text" value="'.$s10.'" disabled></td>
                    </tr>
                    <tr>
                        <td class="">Unidade
                        <input class="" type="text" value="'.$s6.'" name="qtd" disabled></td>
                        <td class="">Quantidade
                        <input class="" type="text" value="'.$s7.'" name="qtd" disabled></td>
                        <td class="">R$/unit
                        <input class="" type="text" value="'.$s9.'" name="unit" disabled></td>
                    </tr>
                    <tr>
                        <td class="">R$/Total
                        <input class="" type="text" value="'.$s9*$s7.'" name="total" disabled></td>
                        <td class="">Hangar
                        <input class="" type="text" value="'.$s11.'" name="" disabled></td>
                        <td class="">Rua
                        <input class="" type="text" value="'.$s12.'" name="" disabled></td>
                    </tr>
                    <tr>
                        <td class="">Coluna
                        <input class="" type="text" value="'.$s13.'" name="" disabled></td>
                        <td class="">Andar
                        <input class="" type="text" value="'.$s14.'" name="" disabled></td>
                        <td class="">Apartamento
                        <input class="" type="text" value="'.$s15.'" name="" disabled></td>
                    </tr>
                </table>
                </hr>
                ';
                }
            }else{
                echo 'Produto não encontrado';
            }
        }
    }
?>
    </div>
    </div>