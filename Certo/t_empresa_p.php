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
        if(isset($_GET['nome_atividade'])){
            $nome_atividade = $_GET['nome_atividade'];
            echo $nome.'&nome_atividade='.$nome_atividade;
        }else{
            echo $nome;
        }
    }
        ?>

<body>
    <div class='caixa-menu-geral'>
    <div class="menu">Menu</div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
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
        <div class="caixa-esquerda-empresa">
        <div class="texto-grande-empresa">Criação de empresas</div>
            <div class="caixa-esquerda-empresa-dentro">
                <form method="POST" action='t_empresa_p.php?nome=<?php redirect()?>'>
                <div class="texto-medio-empresa">Quantas empresas irá registrar? </div>
                    <input class="botao-empresa-input" type="number" placeholder="qtd. empresas" name="qtd_empresas">
                <br>
                    <input class="botao-empresa-submit" type="submit" value="Confirmar">
                <?php
    if(isset($_POST['qtd_empresas'])){
        $i = $_POST['qtd_empresas'];
        if($i <= 0){
            echo '
            <br><br>
            <div class="">Digite um número superior!</div>';
        }else{
            $l = $i;
            $numero = 1;
            $v1 = 'cnpj';
            $v2 = 'nome_empresa';
            $v3 = 'gmail';
            $v4 = 'cep';
            $v5 = 'telefone';
            echo'<form method="POST" action="t_empresa_p.php?$l='.$l.'">';
            echo'<br>';
            for($i;$i>0;$i){
                $i -= 1;
                echo'
                <div class="texto-cinza-empresa">'.$numero.'° Empresa</div>
                <br>
                <table class="">
                    <tr>
                        <td class="">CNPJ: </td>
                        <td><input class="" type="text" name="'.$v1.'" placeholder="00.000.000/0000-00"></td>
                        <td class="">Nome da empresa: </td>
                        <td><input class="" type="text" name="'.$v2.'" placeholder="Nome"></td>
                    <tr>           
                        <td class="">Gmail: </td>
                        <td><input class="" type="text" name="'.$v3.'" placeholder="exemplo@gmail.com"></td>
                    </tr>
                    <tr>
                        <td class="">CEP: </td>
                        <td><input class="" type="text" name="'.$v4.'" placeholder="0000-000"></td>
                        <td class="">Telefone: </td>
                        <td><input class="" type="text" name="'.$v5.'" placeholder="(00) 00000-0000 "></td>
                    </tr>
                </table>';
                $numero += 1;
                $v1 = $v1.'p';
                $v2 = $v2.'p';
                $v3 = $v3.'p';
                $v4 = $v4.'p';
                $v5 = $v5.'p';
            }   
        if(isset($_POST['cnpj' and 'nome_empresa' and 'nome_gerente' and 'gmail' and 'cep' and 'telefone'])){
            echo 'oi'; 
            $hostname = "127.0.0.1";
            $name = "root";
            $password = "root";
            $DB = "dados";

            $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB

            if ($conexao->connect_errno) {
                echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
                exit();
            } else {
                $v1 = $_POST['cnpj']; //CNPJ
                $v2 = $_POST['nome_empresa']; //Nome do gerente
                $v3 = $_POST['gmail']; //Telefone
                $v4 = $_POST['cep']; //CEP
                $v5 = $_POST['telefone'];

                $SQL = 'INSERT INTO `nossa_empresa_p` (`CNPJ_e`,`gmail_e`,`fone_e`,`CEP_e`,`nome_e`) 
                VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ');';
            //Inserir no DB
                $resultado = $conexao->query($SQL);

                $conexao->close();
                header("Location: t_empresa_p.php"); //Envia para a tela de Login ao Cadastrar
            }
            echo '<table class="">';
        }
        echo '<input class="" type="submit">';
    }
    }
    echo'<div class=""></div>';
    echo'</form>';
?>

            </form>
            </div>
            </div>
            <div class="caixa-direita-empresa">
            <div class="texto-grande-empresa">Lista das Empresas</div>
            <div class="caixa-direita-empresa-dentro">
                <table class="tabela-empresa">
                    <tr>
                        <td class="linha-topo-2">A</td>
                        <td class="linha-topo-2">B</td>
                        <td class="linha-topo-2">C</td>
                        <td class="linha-topo-2">D</td>
                        <td class="linha-topo-2">E</td>
                        <td class="linha-topo-2">F</td>
                    </tr>
                </table>
            </div>
            </div>
    </div>
    <div id="">Professor - <?php echo $nome;?></div>
</body>

</html>