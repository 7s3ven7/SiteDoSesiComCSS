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
    <details>
        <summary>Recebimento</summary>
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
    <details>
        <summary>Controle</summary>
        <form method="POST" action="t_controle_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Controle">
        </form>
    </details>
    <details>
        <summary>Estoque</summary>
        <form method="POST" action="t_estoque_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Estoque">
        </form>
    </details>
    <details>
        <summary>Picking</summary>
        <form method="POST" action="t_picking_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>
    <details>
        <summary>Expedição</summary>
        <form method="POST" action="t_nota_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo (WIP)">
        </form>
    </details>
    <details>
        <summary>Relatórios</summary>
        <form method="POST" action="t_relatorios_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>

    <div class="caixa-tela-informacao-geral">
        <form action="t_estoque_a.php?nome=<?php redirect()?>" method="POST">
            <center>
            <div class="caixa-estoque">
                <div class="texto-medio-estoque">Digite o nome do produto</div>
                <input class="botao-input-estoque" type="text" name="nome_p">
                <input class="botao-submit-estoque" type="submit">
            </center>
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
            header("Location: ../../HTML/Aluno/recebimento.html");
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
                echo '
                <table class="">
                    <tr>
                        <td class="texto-medio-estoque">Nome do produto
                        <input class="" type="text" value="'.$s4.'"></td>
                        <td class="texto-medio-estoque">Tipo do produto
                        <input class="" type="text" value="'.$s1.'"></td>
                        <td class="texto-medio-estoque">Validade
                        <input class="" type="text" value="'.$s2.'"></td>
                    </tr>
                    <tr>
                        <td class="texto-medio-estoque">Lote
                        <input class="" type="text" value="'.$s3.'"></td>
                        <td class="texto-medio-estoque">Marca do Produto
                        <input class="" type="text" value="'.$s5.'"></td>
                        <td class="texto-medio-estoque">Peso
                        <input class="" type="text" value="'.$s10.'"></td>
                    </tr>
                    <tr>
                        <td class="texto-medio-estoque">Unidade
                        <input class="" type="text" value="'.$s6.'" name="qtd"></td>
                        <td class="texto-medio-estoque">Quantidade
                        <input class="" type="text" value="'.$s7.'" name="qtd"></td>
                        <td class="texto-medio-estoque">R$/unit
                        <input class="" type="text" value="'.$s9.'" name="unit"></td>
                    </tr>
                    <tr>
                        <td class="texto-medio-estoque">R$/Total
                        <input class="" type="text" value="'.$s9*$s7.'" name="total"></td>
                        <td class="texto-medio-estoque">Hangar
                        <input class="" type="text" value="'.$s11.'" name=""></td>
                        <td class="texto-medio-estoque">Rua
                        <input class="" type="text" value="'.$s12.'" name=""></td>
                    </tr>
                    <tr>
                        <td class="texto-medio-estoque">Coluna
                        <input class="" type="text" value="'.$s13.'" name=""></td>
                        <td class="texto-medio-estoque">Andar
                        <input class="" type="text" value="'.$s14.'" name=""></td>
                        <td class="texto-medio-estoque">Apartamento
                        <input class="" type="text" value="'.$s15.'" name=""></td>
                    </tr>
                </table>
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