<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
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
        function enviar(){
        global $redirect_save;
        echo $redirect_save;
        }
    function inicio(){
        echo '
            <div class="texto-grande-fornecedor">Lista dos fornecedores</div>
            <div class="caixa-direita-turma-dentro">
            <table class="tabela-turma">
            <tr>
            <td class="linha-topo-2">Nome</td>
            <td class="linha-topo-2">Qnt. Alunos</td>
            <td class="linha-ex-select-num-2">Modificar</td>
            <td class="linha-ex-select-num-2">Excluir</td>
        </tr>';
        }
        function falso(){
            global $conexao;
            global $nome;
            $sql = "SELECT `turma`,`quant_alu` FROM `turma`;";
            $resultado = $conexao->query($sql);
            if(mysqli_num_rows($resultado) == null){
                echo '<div class="texto-aviso-turma-tabela">Nenhum fornecedor Encontrado</div>';
            }else{
            global $conexao;
            global $nome;
            $sql = "SELECT `turma`,`quant_alu` FROM `turma`;";
            $resultado = $conexao->query($sql);
            while($row = mysqli_fetch_array($resultado)){
                $turma = $row['0'];
                $alunos = $row['1'];
                echo '
                <tr>
                <td class="linha-topo">'.$turma.'</td>
                <td class="linha-topo">'.$alunos.'</td>
                <form method="POST" action="t_turma.php?nome=';redirect();echo'&turma='.$turma.'&pagina=1">
                <td class="linha-ex-select-num"><input type="submit" class="botao-modificacao-turma" value="modificar"></td>
                </form>
                <form method="POST" action="t_exclusao_turma.php?nome=';redirect();echo'&turma='.$turma.'">
                <td class="linha-ex-select-num"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                </form>
                </tr>';
        }}
    }
    function funcionar(){
        if(isset($_GET['pagina'])){
        if($_GET['pagina']<= 0){
            $pagina = 1;
            $qnt_alu_pagina = $pagina; 
        }else{
            $pagina = $_GET['pagina'];
            $qnt_alu_pagina = $pagina; 
        }}else{
            $pagina = 1;
            $qnt_alu_pagina = $pagina; 
        }
            $paginaMenos = $pagina-1;
            $paginaMais = $pagina+1;
            $inicio = $qnt_alu_pagina;
            $qnt_alu_pagina = 1;
            $qnt_alu_pagina *= 15;
            $inicio -= 1;
            $inicio *= 15;
            if($inicio < 0 ){
                $inicio *= -1;
            }
            global $conexao;
            global $nome;
            if(isset($_GET['turma'])){
            $turma = $_GET['turma'];
            $turma_global = $turma;
            $sql = 'SELECT * FROM `usuario` WHERE `cod_grupo` = "'.$turma.'" LIMIT '.$inicio.',15;';
            $resultado = $conexao->query($sql);
            if(mysqli_num_rows($resultado) > 0){
                echo '
                <div class="texto-medio-turma">Modificação dos Alunos</div>
                <div class="caixa-direita-turma-dentro">
                <table class="tabela-turma">
                <tr>
                    <td class="linha-topo-modificacao-top"><div class="text-topo-turma-modificacao">Nome</div></td>
                    <td class="linha-topo-modificacao-mini-top"><div class="text-topo-turma-modificacao">Senha</div></td>
                    <td class="linha-topo-modificacao-mini-top"><div class="text-topo-turma-modificacao">Conta</div></td>
                    <td class="linha-topo-modificacao-top"><div class="text-topo-turma-modificacao">Turma</div></td>
                    <td class="linha-topo-modificacao-mini-top"><div class="text-topo-turma-modificacao">ID</div></td>
                    <td class="linha-topo-modificacao-mini-top"><div class="text-topo-turma-modificacao">Excluir</div></td>
                </tr>';

                if($qnt_alu_pagina > 0){
                    $id2 = 'id';
                    $aluno2 = 'aluno';
                    $senha2 = 'senha';
                    $tipo_conta2 = 'tipo_conta';
                    $turma2 = 'turma';
                while($row = mysqli_fetch_array($resultado) and $qnt_alu_pagina > 0){
                    $id = $row[0];
                    $aluno = $row[1];
                    $senha = $row[2];
                    $tipo_conta = $row[4];
                    $turma = $row[5];
                    $qnt_alu_pagina -= 1;
                    echo '<td class="linha-topo-modificacao"><input class="botao-modificar-turma" type="text" name="'.$aluno2.'" value="'.$aluno.'"></td>';
                    echo'<td class="linha-topo-modificacao"><input class="botao-modificar-turma"type="text" name="'.$senha2.'" value="'.$senha.'"></td> 
                        <td class="linha-topo-modificacao-mini"><input disabled class="botao-modificar-turma"type="text" name="'.$tipo_conta2.'" value="'.$tipo_conta.'"></td>
                        <td class="linha-topo-modificacao"><input class="botao-modificar-turma" type="text" name="'.$turma2.'" value="'.$turma.'"></td>
                        <td class="linha-topo-modificacao-mini"><input disabled class="botao-modificar-turma" type="number" name="'.$id2.'" value="'.$id.'"></td>
                        <td class="linha-ex-select-num"><button type="submit" onclick="exclusao(this.value);" class="botao-exclusao-turma" " value="'.$id.'"></td>
                    </tr>';
                    $id2 .= 'p';
                    $aluno2 .= 'p';
                    $senha2 .= 'p';
                    $tipo_conta2 .= 'p';
                    $turma2 .= 'p';
                    if($qnt_alu_pagina == 0){
                        $qnt_alu_pagina = -1;
                    }
                }
                echo '</table>
                <table class="caixa-config-turma-aluno">
                <tr>
                <form method="POST" action="t_turma.php?nome=';redirect();echo'&pagina='.$paginaMenos.'&turma='.$turma_global.'">
                <td><input class="passar-pagina" type="submit" value="<"></td>
                </form>';
                echo '<td><input class="salvar-alteracao" type="submit" value="Salvar alterações"></td>';
                if(isset($_GET['senha_v']) and $_GET['senha_v'] == 'mostra'){
                    echo '<form method="POST" action="t_turma.php?nome=';redirect();echo '&pagina='.$pagina.'&turma='.$turma_global.'';enviar();echo'&senha_v=n_mostra">
                    <td><input class="salvar-alteracao" type="submit" value="Esconde a senha"></td>
                    </form>';
                }else{
                    echo '<form method="POST" action="t_turma.php?nome=';redirect();echo '&pagina='.$pagina.'&turma='.$turma_global.'';enviar();echo'&senha_v=mostra">
                    <td><input class="salvar-alteracao" type="submit" value="Mostra a senha"></td>
                    </form>';
                   }
                echo'
                <form method="POST" action="t_turma.php?nome=';redirect();echo'&pagina='.$paginaMais.'&turma='.$turma_global.'&verificacao=v">
                <td><input class="passar-pagina" type="submit" value=">" name="pagina+"></td>
                </form>
                </tr>
                </table>';}
            }else{
                   inicio();
                falso();
            }}else{
                inicio();
                falso();
            }
            }
        $hostname = "127.0.0.1";
        $name = "root";
        $password = "root";
        $DB = "dados";
        $conexao = new mysqli($hostname, $name, $password, $DB);
        if ($conexao->connect_errno) {
            echo "Failes conection: " . $conexao->connect_error;
            exit();
        } else {
            if(isset($_POST['cnpj_fornecedor']) and isset($_POST['nome_fornecedor']) and isset($_POST['gmail_fornecedor']) and  isset($_POST['cep_fornecedro']) and  isset($_POST['telefone_fornecedor']) and isset($_GET['nome_atividade'])){
            $cnpj_f = $conexao->real_escape_string($_POST["cnpj_fornecedor"]);
            $nome_f = $conexao->real_escape_string($_POST["nome_fornecedor"]);
            $gmail_f = $conexao->real_escape_string($_POST["gmail_fornecedor"]);
            $cep_f = $conexao->real_escape_string($_POST["cep_fornecedro"]);
            $telefone_f = $conexao->real_escape_string($_POST["telefone_fornecedor"]);
            $id_atividade = $_GET['nome_atividade'];
            $sql = 'SELECT `nome_f` FROM `fornecedor_p` WHERE `nome_f` = "'.$nome_f.'"';
            $resultado_1 = $conexao->query($sql);
            if($resultado_1->num_rows != 0){
                echo '<div class="texto-aviso-turma">O fornecedor '.$nome_f.' já esta existe, tente outro</div>';
            }else{
            $sql = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`id_atividade`,`nome_f`,`fone_f`,`gmail_f`,`CEP_f`) VALUES ("'.$cnpj_f.'","'.$id_atividade.'","'.$nome_f.'","'.$telefone_f.'","'.$gmail_f.'","'.$cep_f.'");';
            $resultado = $conexao->query($sql);
            }
    }
                            }?>

<body>
    <div class='caixa-menu-geral'>
        <div class='espaco'></div>
        <details>
            <summary>Criações</summary>
            <form method='POST' action='t_turma.php?nome=<?php redirect()?>'>
                <input class='botao-sumario' type='submit' value='Turmas'>
            </form>
            <form method='POST' action='t_atividade.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Atividade'>
            </form>
        </details>
        <details>
            <summary>Cadastros</summary>
            <form method='POST' action='t_fornecedor_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Fornecedor'>
            </form>
            <form method='POST' action='t_empresa_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Empresa'>
            </form>
            <details>
                <summary>Cliente</summary>
                <form method='POST' action='t_cliente_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Cadastro'>
                </form>
                <form method='POST' action='t_pedido_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Pedido'>
                </form>
            </details>
        </details>
        <details>
            <summary>Produto</summary>
            <form method='POST' action='t_produto_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Cadastro'>
            </form>
        </details>
        <details>
            <summary>Recebimento</summary>
            <form method='POST' action='t_quantitativo_r_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_r_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
        <details>
            <summary>Expedição</summary>
            <form method='POST' action='t_quantitativo_e_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_e_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
    </div>
    <div class="menu">Menu</div>
    <div class="caixa-tela-informacao-geral">
        <div class="caixa-esquerda-turma">
            <div class="texto-grande-turma">Crie seu Fornecedor</div>
            <div class="caixa-esquerda-turma-dentro">
                <form method="POST" action='t_fornecedor_p.php?nome=<?php redirect()?>'>
                    <div class="texto-cinza-turma">CNPJ:</div>
                    <input class="botao-turma-input" type="text" placeholder="000.000.000-00" name="cnpj_fornecedor">
                    <div class="texto-cinza-turma">Fornecedor: </div>
                    <input class="botao-turma-input" type="text" placeholder="nome" name="nome_fornecedor">
                    <div class="texto-cinza-turma">Gmail:</div>
                    <input class="botao-turma-input" type="text" placeholder="fornecedor@gmail.com"
                        name="gmail_fornecedor">
                    <div class="texto-cinza-turma">CEP: </div>
                    <input class="botao-turma-input" type="text" placeholder="000.000.000-00" name="cep_fornecedro">
                    <div class="texto-cinza-turma">Telefone:</div>
                    <input class="botao-turma-input" type="text" placeholder="(00) 00000-0000"
                        name="telefone_fornecedor">
                    <br>
                    <input class="botao-turma-submit" type="submit" value="Cadastrar turma">
                </form>
            </div>
        </div>
        <div class="caixa-direita-turma">
            <?php funcionar(); ?>
        </div>
        <div class='conta-geral'>Professor - <?php echo $nome;?></div>
    </div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>

</html>