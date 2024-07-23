<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
</head>
<?php
    $nome = $_GET['nome'];
    function redirect(){
        global $nome;
        if(isset($_GET['nome_atividade']) and isset($_GET['turma'])){
            $nome_atividade = $_GET['nome_atividade'];
            $turma = $_GET['turma'];
            echo $nome.'&nome_atividade='.$nome_atividade.'&turma='.$turma;
        }elseif(isset($_GET['nome_atividade'])){
            $nome_atividade = $_GET['nome_atividade'];
            echo $nome.'&nome_atividade='.$nome_atividade;
        }elseif(isset($_GET['turma'])){
            $turma = $_GET['turma'];
            echo $nome.'&turma='.$turma;
        }else{
            echo $nome;
        }
    }
        ?>

<body>
    <div class='caixa-menu-geral'>
        <div class='espaco'></div>
        <details class='details'>
            <summary class='sumario'>Criações</summary>
            <form method='POST' action='t_turma.php?nome=<?php redirect()?>'>
                <input class='botao-sumario' type='submit' value='Turmas'>
            </form>
            <form method='POST' action='t_atividade.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Atividade'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Cadastros</summary>
            <form method='POST' action='t_fornecedor_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Fornecedor'>
            </form>
            <form method='POST' action='t_empresa_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Empresa'>
            </form>
            <details class='details'>
                <summary class='sumario'>Cliente</summary>
                <form method='POST' action='t_cliente_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Cadastro'>
                </form>
                <form method='POST' action='t_pedido_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Pedido'>
                </form>
            </details>
        </details>
        <details class='details'>
            <summary class='sumario'>Produto</summary>
            <form method='POST' action='t_produto_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Cadastro'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Recebimento</summary>
            <form method='POST' action='t_quantitativo_r_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_r_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Expedição</summary>
            <form method='POST' action='t_quantitativo_e_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_e_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
    </div>
    <div class="caixa-tela-informacao-geral">
        <div class="caixa-esquerda-turma">
            <div class="texto-grande-turma">Crie sua Turma</div>
            <div class="caixa-esquerda-turma-dentro">
                <form method="POST" action='t_turma.php?nome=<?php redirect()?>'>
                    <div class="texto-cinza-turma">Nome do grupo:</div>
                    <input class="botao-turma-input" type="text" placeholder="Nome" name="nome_grupo">
                    <div class="texto-cinza-turma">Quantidade de alunos: </div>
                    <input class="botao-turma-input" type="text" placeholder="qtn. alunos" name="qnt_aluno">
                    <br>
                    <input class="botao-turma-submit" type="submit" value="Cadastrar turma">
                </form>
            </div>
            <?php 
            $hostname = "127.0.0.1";
            $name = "root";
            $password = "root";
            $DB = "dados";
            $conexao = new mysqli($hostname, $name, $password, $DB);
                if ($conexao->connect_errno) {
                    echo "Failes conection: " . $conexao->connect_error;
                    exit();
                } else {
                    if(isset($_POST['nome_grupo']) and isset($_POST['qnt_aluno']) and $_POST['qnt_aluno'] != '' and $_POST['nome_grupo'] != ''){
                    $nome_turma = $conexao->real_escape_string($_POST["nome_grupo"]);
                    $qnt = $conexao->real_escape_string($_POST["qnt_aluno"]);
                    $sql = 'SELECT `turma` FROM `turma` WHERE `turma` = "'.$nome_turma.'"';
                    $resultado_1 = $conexao->query($sql);
                        if($resultado_1->num_rows != 0){
                            echo '<div class="texto-aviso-turma">O nome '.$nome_turma.' já esta em uso, tente outro</div>';
                        }else{
                            $SQL = 'INSERT INTO `turma` (`turma`,`quant_alu`) VALUES ("' . $nome_turma . '","' . $qnt . '");';
                            $resultado = $conexao->query($SQL);
                            }}}?>
        </div>
        <div class="caixa-direita-turma">
            <div class="texto-grande-turma">Lista das Turmas</div>
            <div class="caixa-direita-turma-dentro">
                <table class="tabela-turma">
                    <tr>
                        <td class="linha-topo-2">Nome</td>
                        <td class="linha-topo-2">Qnt. Alunos</td>
                        <td class="linha-ex-select-num-2">Ativo</td>
                        <td class="linha-ex-select-num-2">Excluir</td>
                    </tr>
                    <?php
                    function verdadeiro(){
                        if(isset($_GET['nome_atividade']) and isset($_GET['turma'])){
                        global $conexao;
                        global $nome;
                        $sql = "SELECT `turma`,`quant_alu` FROM `turma` WHERE `turma` = '".$_GET['turma']."';";
                        $resultado = $conexao->query($sql);
                        $row = mysqli_fetch_array($resultado);
                        $turma2 = $row['0'];
                        $alunos = $row['1'];
                        echo '<form method="POST" action="t_turma.php?nome='.$nome.'&nome_atividade='.$_GET['nome_atividade'].'">
                        <tr>
                        <td class="linha-topo">'.$turma2.'</td>
                        <td class="linha-topo">'.$alunos.'</td>
                        <td class="linha-ex-select-num"><input id="botao-select-turma" type="submit"></td>
                        </form>
                        <form method="POST" action="t_exclusao_turma.php?nome='.$nome.'&turma='.$turma2.'">
                        <td class="linha-ex-select-num"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                        </form>
                        </tr>';
                        }elseif(isset($_GET['turma'])){
                            global $conexao;
                            global $nome;
                            $sql = "SELECT `turma`,`quant_alu` FROM `turma` WHERE `turma` = '".$_GET['turma']."';";
                            $resultado = $conexao->query($sql);
                            $row = mysqli_fetch_array($resultado);
                            $turma2 = $row['0'];
                            $alunos = $row['1'];
                            echo '<form method="POST" action="t_turma.php?nome='.$nome.'">
                            <tr>
                            <td class="linha-topo">'.$turma2.'</td>
                            <td class="linha-topo">'.$alunos.'</td>
                            <td class="linha-ex-select-num"><input id="botao-select-turma" type="submit"></td>
                            </form>
                            <form method="POST" action="t_exclusao_turma.php?nome='.$nome.'&turma='.$turma2.'">
                            <td class="linha-ex-select-num"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                            </form>
                            </tr>';
                        }else{
                            return 1;
                        }
                    }
                    function falso(){
                        global $conexao;
                        global $nome;
                        $sql = "SELECT `turma`,`quant_alu` FROM `turma`;";
                        $resultado = $conexao->query($sql);
                        if(mysqli_num_rows($resultado) == null){
                            echo '<div class="texto-aviso-turma-tabela">Nenhuma Turma Encontrada</div>';
                        }
                        if(isset($turma2)){
                        if(isset($_GET['nome_atividade'])){
                        global $conexao;
                        global $nome;
                        $sql = "SELECT `turma`,`quant_alu` FROM `turma`;";
                        $resultado = $conexao->query($sql);
                        while($row = mysqli_fetch_array($resultado)){
                            $turma = $row['0'];
                            $alunos = $row['1'];
                            if($turma != $turma2){
                            echo '<form method="POST" action="t_turma.php?nome='.$nome.'&turma='.$turma.'&nome_atividade='.$_GET['nome_atividade'].'">
                            <tr>
                            <td class="linha-topo">'.$turma.'</td>
                            <td class="linha-topo">'.$alunos.'</td>
                            <td class="linha-ex-select-num"><input class="botao-select-turma" type="submit"></td>
                            </form>
                            <form method="POST" action="t_exclusao_turma.php?nome='.$nome.'&turma='.$turma.'">
                            <td class="linha-ex-select-num"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                            </form>
                            </tr>';
                    }}}else{
                        global $conexao;
                        global $nome;
                        $sql = "SELECT `turma`,`quant_alu` FROM `turma`;";
                        $resultado = $conexao->query($sql);
                        while($row = mysqli_fetch_array($resultado)){
                            $turma = $row['0'];
                            $alunos = $row['1'];
                            if($turma != $turma2){
                            echo '<form method="POST" action="t_turma.php?nome='.$nome.'&turma='.$turma.'">
                            <tr>
                            <td class="linha-topo">'.$turma.'</td>
                            <td class="linha-topo">'.$alunos.'</td>
                            <td class="linha-ex-select-num"><input class="botao-select-turma" type="submit"></td>
                            </form>
                            <form method="POST" action="t_exclusao_turma.php?nome='.$nome.'&turma='.$turma.'">
                            <td class="linha-ex-select-num"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                            </form>
                            </tr>';
                    }}}}elseif(isset($_GET['nome_atividade'])){
                        global $conexao;
                        global $nome;
                        $sql = "SELECT `turma`,`quant_alu` FROM `turma`;";
                        $resultado = $conexao->query($sql);
                        
                        while($row = mysqli_fetch_array($resultado)){
                            $turma = $row['0'];
                            $alunos = $row['1'];
                            echo '<form method="POST" action="t_turma.php?nome='.$nome.'&turma='.$turma.'&nome_atividade='.$_GET['nome_atividade'].'">
                            <tr>
                            <td class="linha-topo">'.$turma.'</td>
                            <td class="linha-topo">'.$alunos.'</td>
                            <td class="linha-ex-select-num"><input class="botao-select-turma" type="submit"></td>
                            </form>
                            <form method="POST" action="t_exclusao_turma.php?nome='.$nome.'&turma='.$turma.'">
                            <td class="linha-ex-select-num"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                            </form>
                            </tr>';
                    }}else{
                        global $conexao;
                        global $nome;
                        $sql = "SELECT `turma`,`quant_alu` FROM `turma`;";
                        $resultado = $conexao->query($sql);
                        while($row = mysqli_fetch_array($resultado)){
                            $turma = $row['0'];
                            $alunos = $row['1'];
                            echo '<form method="POST" action="t_turma.php?nome='.$nome.'&turma='.$turma.'">
                            <tr>
                            <td class="linha-topo">'.$turma.'</td>
                            <td class="linha-topo">'.$alunos.'</td>
                            <td class="linha-ex-select-num"><input class="botao-select-turma" type="submit"></td>
                            </form>
                            <form method="POST" action="t_exclusao_turma.php?nome='.$nome.'&turma='.$turma.'">
                            <td class="linha-ex-select-num"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                            </form>
                            </tr>';
                    }}
                }
                verdadeiro();
                    falso();
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="menu">Menu</div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>

</html>