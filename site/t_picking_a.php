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
        <form action="t_picking_a.php?nome=<?php redirect();?>" method="POST">
            <div class="">
                <div class="">Digite o nome do produto</div>
                <input class="" type="text" name="nome_p">
                <input class="" type="submit">
                <div class="">
        </form>
        <?php
    session_start();
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
            
            $sql = "SELECT solici FROM 
            `pedido_cliente_p` 
            ORDER BY id_pedido;";            

	        $resultado = $conexao->query($sql);

            if($resultado->num_rows != 0){
                while($row = mysqli_fetch_array($resultado)){
                $n_solici = $row['0'];
                

                echo '
                <table class="">
                    <tr>
                        <form action="t_solicitacao_a.php" method="POST">
                        <td class="">Nº Pedido: 
                        <input class="" type="number" value="'.$n_solici.'" name="n_soli" disabled>
                        <input class="" type="submit" value="abrir"</td>
                        </form>
                    </tr>
                <hr>
                ';
                }
            }else{
                echo 'Produto não encontrado';
            }
        }
?>
    </div>
    </div>