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
        <form method="POST" action='t_nota_r_a.php?nome=<?php redirect()?>'>
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_r_a.php?nome=<?php redirect();?>">
            <input class="botao-sumario" type="submit" value="Qualitativo">
        </form>
        <form method="POST" action="t_quantitativo_a.php?nome=<?php redirect();?>">
            <input class="botao-sumario" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Controle</summary>
        <form method="POST" action="t_controle_a.php?nome=<?php redirect();?>">
            <input class="botao-sumario" type="submit" value="Controle">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Estoque</summary>
        <form method="POST" action="t_estoque_a.php?nome=<?php redirect();?>">
            <input class="botao-sumario" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Picking</summary>
        <form method="POST" action="t_picking_a.php?nome=<?php redirect();?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Expedição</summary>
        <form method="POST" action="t_nota_e_a.php?nome=<?php redirect();?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_e_a.php?nome=<?php redirect();?>">
            <input class="botao-sumario" type="submit" value="Qualitativo (WIP)">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Relatórios</summary>
        <form method="POST" action="t_relatorios_a.php?nome=<?php redirect();?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>
    <div class="caixa-tela-informacao-geral">
    <form method="POST" action="t_controle_a.php?nome=<?php redirect();?>">
    <center>
        <div class="texto-grande-controle-a">Número da Solicitação</div>
        <input class="botao-input-controle-a" type="number" name="soli">
        <input class="botao-submit-controle-a" type="submit">
    </center>
    </form>
    <?php
    if(isset($_POST['soli'])){
        $hostname = "127.0.0.1";
        $name = "u935055604_wesley";
        $password = "XwZX1383";
        $DB = "u935055604_dados";

        $conexao = new mysqli($hostname, $name, $password, $DB);

        $n_solici=$_POST['soli'];
        
        $sql="SELECT *
        FROM `picking_a`
        WHERE id_picking = ".$n_solici.";";

        $resultado = $conexao->query($sql);
        if($resultado->num_rows != 0){
            $row = mysqli_fetch_array($resultado);
            $s1 = $row['0'];
            $s2 = $row['1'];
            $s3 = $row['2'];
            $s4 = $row['3'];
            $s5 = $row['4'];
            $s6 = $row['5'];
            $s7 = $row['6'];
            $s8 = $row['7'];
            $s9 = $row['8'];
            $s10 = $row['9'];
            $s11 = $row['10'];
            $s12 = $row['11'];
            $s13 = $row['12'];
            $s14 = $row['13'];
            $s15 = $row['14'];
            }
        if($_POST['soli']==1){
    ?>

        <input class="botao-permitir-controle-a" type="submit" value="permitir" name="permitir">
        <input class="botao-negar-controle-a" type="submit" value="negar" name="negar">
        <?php
        echo '
        <br>
        <br>
        <center>
        <table border 1px>
        <tr>
        <th>
            Produto
        </th>
        <th>
            Unidade
        </th>
        <th>
            Quantidade
        </th>
        </tr>
        <tr>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaaaa</td>
        <td>aaaaaaaaaaaaaaas</td>
        </tr>
        </table>
        </center>
        ';
        ?>
    <?php
        }else{
            echo '
            <br>
            <br>
            <center>
                <div class="texto-grande-controle-a">Solicitação não encontrada.</div>
            </center>
            ';
        }
    }else{
        echo '
            <br>
            <br>
            <center>
                <div class="texto-grande-controle-a">Digite o número de uma Solicitação de Picking.</div>
            </center>
        ';
    }
    ?>
    </div>
</body>

</html>