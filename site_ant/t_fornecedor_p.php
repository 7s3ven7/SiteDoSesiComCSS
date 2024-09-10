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
    function exibir(){
        global $conexao;
            if(isset($_GET['nome_atividade'])){
        $nome_atividade = $_GET['nome_atividade'];
        $sql = 'SELECT * FROM `fornecedor_p` WHERE `id_atividade` = "'.$nome_atividade.'"';
        $resultado = $conexao->query($sql);
        $row = mysqli_fetch_array($resultado);
        $v1 = $row['0'];
        $v2 = $row['2'];
        $v3 = $row['3'];
        $v4 = $row['4'];
        $v5 = $row['5'];
        for($i = 1;$i <= 5;$i++){
            $valor = 'v'.$i;
            if($$valor == ''){
                $$valor = '-';
            }else{
                $$valor = $$valor;
            }
        }
        echo '<table class="tabela-fornecedor-usado">
            <thead>
            <tr><td colspan="2" class="td-fornecedor-usado-topo"><div class="texto-fornecedor-usado">Fornecedor Selecionado</div></td></tr>
            </thead>';
        echo '<tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">Fornecedor<div class="fornecedor-negrito">'.$v2.'</div></div></td>
            </tr>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">CNPJ<div class="fornecedor-negrito">'.$v1.'</div></div></td>
            </tr>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">CEP<div class="fornecedor-negrito">'.$v5.'</div></div></td>
            </tr>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">Gmail<div class="fornecedor-negrito">'.$v4.'</div></div></td>
            </tr>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">Telefone<div class="fornecedor-negrito">'.$v3.'</div></div></td>
            </tr>';}
            else{
        echo '<table class="tabela-fornecedor-usado">
            <thead>
            <tr><td colspan="2" class="td-fornecedor-usado-topo"><div class="texto-fornecedor-usado">Selecione uma Atividade <div class="red">ANTES</div></div></td></tr>
            </thead>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">Fornecedor<div class="fornecedor-negrito"></div></div></td>
            </tr>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">CNPJ<div class="fornecedor-negrito"></div></div></td>
            </tr>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">CEP<div class="fornecedor-negrito"></div></div></td>
            </tr>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">Gmail<div class="fornecedor-negrito"></div></div></td>
            </tr>
            <tr>
            <td class="td-fornecedor-usado-left"><div class="texto-fornecedor-usado">Telefone<div class="fornecedor-negrito"></div></div></td>
            </tr>        
        </table>';
            } 
        echo '</table>';
    }
    function cadastrar(){
        global $conexao;
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
    $hostname = "127.0.0.1";
    $name = "u935055604_wesley";
    $password = "XwZX1383";
    $DB = "u935055604_dados";
        $conexao = new mysqli($hostname, $name, $password, $DB);
        if ($conexao->connect_errno) {
            echo "Failes conection: " . $conexao->connect_error;
            exit();
        } else {
            if(isset($_POST['cnpj_fornecedor']) and isset($_POST['nome_fornecedor']) and isset($_POST['gmail_fornecedor']) and  isset($_POST['cep_fornecedro']) and  isset($_POST['telefone_fornecedor']) and isset($_GET['nome_atividade'])){
            cadastrar();
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
                    <div class="texto-cinza-turma">Fornecedor: </div>
                    <input class="botao-turma-input" type="text" placeholder="nome" name="nome_fornecedor">
                    <div class="texto-cinza-turma">CNPJ:</div>
                    <input class="botao-turma-input" type="text" placeholder="000.000.000-00" name="cnpj_fornecedor">
                    <div class="texto-cinza-turma">CEP: </div>
                    <input class="botao-turma-input" type="text" placeholder="000.000.000-00" name="cep_fornecedro">
                    <div class="texto-cinza-turma">Gmail:</div>
                    <input class="botao-turma-input" type="text" placeholder="fornecedor@gmail.com"
                        name="gmail_fornecedor">
                    <div class="texto-cinza-turma">Telefone:</div>
                    <input class="botao-turma-input" type="text" placeholder="(00) 00000-0000"
                        name="telefone_fornecedor">
                    <br>
                    <input class="botao-turma-submit" type="submit" value="Cadastrar turma">
                </form>
            </div>
        </div>
        <div class="caixa-direita-turma">
            <?php exibir(); ?>
        </div>
    </div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>

</html>