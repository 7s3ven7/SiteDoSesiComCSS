<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
</head>

<?php
if(isset($_GET['nome_atividade'])){
    $nome_atividade = $_GET['nome_atividade'];
    $nome = $_GET['nome'];

    echo "<body>
    <div class='caixa-menu-geral'>
        <div class='espaco'></div>
        <details class='details'>
            <summary class='sumario'>Criações</summary>
            <form method='POST'
                action='t_turma.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
    <input class='botao-sumario' type='submit' value='Turmas'>
    </form>
    <form method='POST' action='t_atividade.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
    <input class='botao-sumario' type='submit' value='Atividade'>
    </form>
    </details>
    <details class='details'>
        <summary class='sumario'>Cadastros</summary>
        <form method='POST'
            action='t_fornecedor_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
            <input class='botao-sumario' type='submit' value='Fornecedor'>
        </form>
        <form method='POST' action='t_empresa_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
            <input class='botao-sumario' type='submit' value='Empresa'>
        </form>
        <details class='details'>
            <summary class='sumario'>Cliente</summary>
            <form method='POST'
                action='t_cliente_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
    <input class='botao-sumario' type='submit' value='Cadastro'>
    </form>
    <form method='POST' action='t_pedido_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
        <input class='botao-sumario' type='submit' value='Pedido'>
    </form>
    </details>
    </details>
    <details class='details'>
        <summary class='sumario'>Produto</summary>
        <form method='POST' action='t_produto_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
            <input class='botao-sumario' type='submit' value='Cadastro'>
        </form>
    </details>
    <details class='details'>
        <summary class='sumario'>Recebimento</summary>
        <form method='POST'
            action='t_quantitativo_r_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
    <input class='botao-sumario' type='submit' value='Quantitativo'>
    </form>
    <form method='POST' action='t_nota_r_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
        <input class='botao-sumario' type='submit' value='Nota Fiscal'>
    </form>
    </details>
    <details class='details'>
        <summary class='sumario'>Expedição</summary>
        <form method='POST'
            action='t_quantitativo_e_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
            <input class='botao-sumario' type='submit' value='Quantitativo'>
        </form>
        <form method='POST' action='t_nota_e_p.php?nome='".$nome."'&nome_atividade='".$nome_atividade."'>
            <input class='botao-sumario' type='submit' value='Nota Fiscal'>
        </form>
    </details>
    </div>
    <div class='caixa-tela-informacao-geral'></div>
    <div class='menu'>Menu</div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>";
}else{ $nome = $_GET['nome'];
echo "

<body>
    <div class='caixa-menu-geral'>
        <div class='espaco'></div>
        <details class='details'>
            <summary class='sumario'>Criações</summary>
            <form method='POST' action='t_turma.php?nome='".$nome."'>
            <input class=' botao-sumario' type='submit' value='Turmas'>
            </form>
            <form method='POST' action='t_atividade.php?nome='".$nome."'>
            <input class=' botao-sumario' type='submit' value='Atividade'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Cadastros</summary>
            <form method='POST' action='t_fornecedor_p.php?nome='".$nome."'>
                    <input class=' botao-sumario' type='submit' value='Fornecedor'>
            </form>
            <form method='POST' action='t_empresa_p.php?nome='".$nome."'>
                    <input class=' botao-sumario' type='submit' value='Empresa'>
            </form>
            <details class='details'>
                <summary class='sumario'>Cliente</summary>
                <form method='POST' action='t_cliente_p.php?nome='".$nome."'>
            <input class=' botao-sumario' type='submit' value='Cadastro'>
                </form>
                <form method='POST' action='t_pedido_p.php?nome='".$nome."'>
                <input class=' botao-sumario' type='submit' value='Pedido'>
                </form>
            </details>
        </details>
        <details class='details'>
            <summary class='sumario'>Produto</summary>
            <form method='POST' action='t_produto_p.php?nome='".$nome."'>
                    <input class=' botao-sumario' type='submit' value='Cadastro'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Recebimento</summary>
            <form method='POST' action='t_quantitativo_r_p.php?nome='".$nome."'>
            <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_r_p.php?nome='".$nome."'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Expedição</summary>
            <form method='POST' action='t_quantitativo_e_p.php?nome='".$nome."'>
                    <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_e_p.php?nome='".$nome."'>
                    <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
    </div>
    <div class='caixa-tela-informacao-geral'>
        <div class='texto-grande-turma'>Crie sua Turma</div>
        <div class='caixa-turma'>
            <form method='POST' action='t_turma.php'>
                <div class='texto-cinza-turma'>Nome do grupo:</div>
                <input class='botao-turma-input' type='text' value='Nome' name='nome_grupo'>
                <div class='texto-cinza-turma'>Quantidade de alunos: </div>
                <input class='botao-turma-input' type='text' value='qtn. alunos' name='qnt_aluno'>
                <br>
                <input class='botao-turma-submit' type='submit' value='Cadastrar turma'>
            </form>";
            if(isset($_POST['nome_grupo']) and isset($_POST['qnt_aluno']) and $_POST['qnt_aluno'] != '' and
            $_POST['nome_grupo'] != ''){
            $hostname = "127.0.0.1";
            $name = "root";
            $password = "root";
            $DB = "dados";
            $conexao = new mysqli($hostname, $name, $password, $DB);
            if ($conexao->connect_errno) {
            echo "Failes conection: " . $conexao->connect_error;
            exit();
            } else {
            $nome_turma = $conexao->real_escape_string($_POST["nome_grupo"]);
            $qnt = $conexao->real_escape_string($_POST["qnt_aluno"]);
            $sql = "SELECT `turma` FROM `turma` WHERE `turma` = '".$nome_turma."'";
            $resultado_1 = $conexao->query($sql);
            if($resultado_1->num_rows != 0){
            echo '<div class="">
                <div class="">O nome "'.$nome_turma.'" já esta em uso, tente outro</div>
            </div>';
            }else{
            $SQL = 'INSERT INTO `turma` (`turma`,`quant_alu`) VALUES ("' . $nome_turma . '","' . $qnt . '");';
            $resultado = $conexao->query($SQL);
            $conexao->close();
            header("location:t_atividade.php");
            }
            }
            }
            "
        </div>
    </div>
    <div class='menu'>Menu</div>
    <div class='conta-geral'>Professor - ".$nome."</div>
</body>";}?>

<body>
    <div class="espaco"></div>
    <div class="caixa-menu-geral">
        <details class="details">
            <summary class="sumario">Criações</summary>
            <form method="POST"
                action="t_turma.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Turmas">
            </form>
            <form method="POST"
                action="t_atividade.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Atividade">
            </form>
        </details>
        <details class="details">
            <summary class="sumario">Cadastros</summary>
            <form method="POST"
                action="t_fornecedor_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Fornecedor">
            </form>
            <form method="POST"
                action="t_empresa_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Empresa">
            </form>
            <details class="details">
                <summary class="sumario">Cliente</summary>
                <form method="POST"
                    action="t_cliente_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                    <input class="botao-sumario" type="submit" value="Cadastro">
                </form>
                <form method="POST"
                    action="t_pedido_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                    <input class="botao-sumario" type="submit" value="Pedido">
                </form>
            </details>
        </details>
        <details class="details">
            <summary class="sumario">Produto</summary>
            <form method="POST"
                action="t_produto_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Cadastro">
            </form>
        </details>
        <details class="details">
            <summary class="sumario">Recebimento</summary>
            <form method="POST"
                action="t_quantitativo_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Quantitativo">
            </form>
            <form method="POST"
                action="t_nota_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Nota Fiscal">
            </form>
        </details>
        <details class="details">
            <summary class="sumario">Expedição</summary>
            <form method="POST"
                action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Quantitativo">
            </form>
            <form method="POST"
                action="t_nota_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="botao-sumario" type="submit" value="Nota Fiscal">
            </form>
        </details>
    </div>
    <div class="caixa-tela-informacao-geral">
        <div class="texto-grande-turma">Crie sua Turma</div>
        <div class="caixa-turma">
            <form method="POST" action="t_turma.php">
                <div class="texto-cinza-turma">Nome do grupo:</div>
                <input class="botao-turma-input" type="text" value="Nome" name="nome_grupo">
                <div class="texto-cinza-turma">Quantidade de alunos: </div>
                <input class="botao-turma-input" type="text" value="qtn. alunos" name="qnt_aluno">
                <br>
                <input class="botao-turma-submit" type="submit" value="Cadastrar turma">
            </form>
            <?php 
    if(isset($_POST['nome_grupo']) and isset($_POST['qnt_aluno']) and $_POST['qnt_aluno'] != '' and $_POST['nome_grupo'] != ''){
        $hostname = "127.0.0.1";
        $name = "root";
        $password = "root";
        $DB = "dados";
        $conexao = new mysqli($hostname, $name, $password, $DB);
        if ($conexao->connect_errno) {
            echo "Failes conection: " . $conexao->connect_error;
            exit();
        } else {
            $nome_turma = $conexao->real_escape_string($_POST["nome_grupo"]);
            $qnt = $conexao->real_escape_string($_POST["qnt_aluno"]);
            $sql = "SELECT `turma` FROM `turma` WHERE `turma` = '".$nome_turma."'";
            $resultado_1 = $conexao->query($sql);
            if($resultado_1->num_rows != 0){
                 echo '<div class=""><div class="">O nome "'.$nome_turma.'" já esta em uso, tente outro</div></div>';
            }else{
            $SQL = 'INSERT INTO `turma` (`turma`,`quant_alu`) VALUES ("' . $nome_turma . '","' . $qnt . '");';
            $resultado = $conexao->query($SQL);
            $conexao->close();
            header("location:t_atividade.php");
            }
        }
    }
?>
        </div>
    </div>
    <div class="menu">Menu</div>
    <div id="conta-geral">Professor - <?php echo $nome;?></div>
</body>

</html>