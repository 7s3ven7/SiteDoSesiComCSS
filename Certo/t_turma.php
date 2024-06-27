<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
</head>
<?php
    $nome_atividade = $_GET['nome_atividade'];
    $nome = $_GET['nome'];
?>

<body>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Criações</summary>
        <form method="POST" action="t_turma.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Turmas"></div>
        </form>
        <form method="POST"
            action="t_atividade.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Atividade"></div>
        </form>
    </details>
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
        <div class="texto">Crie sua Turma</div>
        <div class="caixa-mini">
            <form method="POST" action="t_turma.php">
                <div class="texto-mini">Nome do grupo</div>
                <input class="caixa-texto" type="text" placeholder="Nome" name="nome_grupo">
                <div class="texto-mini">Quantidade de alunos</div>
                <input class="caixa-texto" type="text" placeholder="Alunos" name="qnt_aluno">
                <br>
                <br>
                <input type="submit">
            </form>
            <?php if(isset($_POST['nome_grupo']) and isset($_POST['qnt_aluno'])){
                    $hostname = "127.0.0.1";
                    $name = "root";
                    $password = "root";
                    $DB = "dados";
                    $conexao = new mysqli($hostname, $name, $password, $DB);
                    if ($conexao->connect_errno) {
                        echo "Failes conection: " . $conexao->connect_error;
                        exit();
                    } else
                    {
                        $nome = $conexao->real_escape_string($_POST["nome_grupo"]);
                        $qnt = $conexao->real_escape_string($_POST["qnt_aluno"]);
                        $sql = "SELECT `turma` FROM `turma` WHERE `turma` = '".$nome."'";
                        $resultado_1 = $conexao->query($sql);
                        if($resultado_1->num_rows != 0){
                            echo '<div class="texto-mini">Este nome já esta em uso, tente outro</div>';
                        }else{
                        $SQL = 'INSERT INTO `turma` (`turma`,`quant_alu`) VALUES ("' . $nome . '","' . $qnt . '");';
                        $resultado = $conexao->query($SQL);
                        $conexao->close();
                        //header("Location: t_atividade.php");
                    }
                }}
                ?>
        </div>
    </div>
    <div id="tipo">Conta: <?php echo $nome;?></div>
</body>

</html>