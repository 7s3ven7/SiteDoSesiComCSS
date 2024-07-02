<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
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
    <div class=""></div>
    <details class="">
        <summary class="">Criações</summary>
        <form method="POST" action="t_turma.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Turmas"></div>
        </form>
        <form method="POST"
            action="t_atividade.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Atividade"></div>
        </form>
    </details>
    <details class="">
        <summary class="details-big">Cadastros</summary>
        <form method="POST"
            action="t_fornecedor_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Fornecedor"></div>
        </form>
        <form method="POST"
            action="t_empresa_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="">Cliente</summary>
            <form method="POST"
                action="t_cliente_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="" type="submit" value="Cadastro"></div>
            </form>
            <form method="POST" action="t_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="">
        <summary class="">Produto</summary>
        <form method="POST"
            action="t_produto_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="">
        <summary class="">Recebimento</summary>
        <form method="POST"
            action="t_quantitativo_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Quantitativo"></div>
        </form>
        <form method="POST"
            action="t_nota_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="">
        <summary class="">Expedição</summary>
        <form method="POST"
            action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Quantitativo">
        </form>
        <form method="POST"
            action="t_nota_e_pr.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="">
        <summary class="">Expedição</summary>
        <form action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Quantitativo">
        </form>
        <form action="t_nota_e_pr.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class=""></div>
    <div class="">Menu</div>
    <div class="">
        <div class="">Crie sua Turma</div>
        <div class="">
            <form method="POST" action="t_turma.php">
                <table class="">
                    <tr>
                        <td class="">Nome do grupo: </td>
                        <td><input class="" type="text" placeholder="Nome" name="nome_grupo"></td>
                        <td class="">Quantidade de alunos: </td>
                        <td><input class="" type="text" placeholder="Alunos" name="qnt_aluno"></td>
                    <tr>
                </table>
                <br>
                <input class="" type="submit" value="Cadastrar turma">
            </form>
            <?php if(isset($_POST['nome_grupo']) and isset($_POST['qnt_aluno']) and $_POST['qnt_aluno'] != '' and $_POST['nome_grupo'] != ''){
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
                        $nome_turma = $conexao->real_escape_string($_POST["nome_grupo"]);
                        $qnt = $conexao->real_escape_string($_POST["qnt_aluno"]);
                        $sql = "SELECT `turma` FROM `turma` WHERE `turma` = '".$nome_turma."'";
                        $resultado_1 = $conexao->query($sql);
                        if($resultado_1->num_rows != 0){
                            echo '<div class=""><div class="">O nome: "'.$nome_turma.'" já esta em uso, tente outro</div></div>';
                        }else{
                        $SQL = 'INSERT INTO `turma` (`turma`,`quant_alu`) VALUES ("' . $nome_turma . '","' . $qnt . '");';
                        $resultado = $conexao->query($SQL);
                        $conexao->close();
                        //header("Location: t_atividade.php");
                    }
                }}
                ?>
        </div>
    </div>
    <div id="">Conta: <?php echo $nome;?></div>
</body>

</html>