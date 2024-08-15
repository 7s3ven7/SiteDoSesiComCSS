<!DOCTYPE html>

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
        ?>

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
        <form method="POST" action="t_produto_p.php?nome=<?php redirect() ?>echo">
            <div class="caixa-principal-fundo-superior-produto">
            <div class="texto-central-produto">Cadastro produto</div>
            <table class="caixa-principal-superior-prduto">
                <tr>
                    <td class="texto-cinza-produto-principal">Código do fornecedor: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$'" placeholder="1"></td>
                    <td class="texto-cinza-produto-principal">Tipo: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v2.'" placeholder="caixa"></td>
                    <td class="texto-cinza-produto-principal">Validade: </td>
                    <td><input class="botao-produto-principal" type="date" name="'.$v3.'"></td>
                </tr>
                <tr>
                    <td class="texto-cinza-produto-principal">Lote: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v4.'" placeholder="1"></td>
                    <td class="texto-cinza-produto-principal">Nome: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v5.'" placeholder="empresa"></td>
                    <td class="texto-cinza-produto-principal">Marca do produto: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v6.'" placeholder="marca"></td>
                </tr>
                <tr>
                    <td class="texto-cinza-produto-principal">Número do pedido: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v7.'" placeholder="1"></td>
                    <td class="texto-cinza-produto-principal">Unidade: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v8.'" placeholder="1"></td>
                    <td class="texto-cinza-produto-principal">Quantidade de unidade: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v9.'" placeholder="1"></td>
                </tr>
                <tr>
                    <td class="texto-cinza-produto-principal ">Quantidade de produto: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v10.'" placeholder="1"></td>
                    <td class="texto-cinza-produto-principal">Valor da unidade: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v11.'" placeholder="1"></td>
                    <td class="texto-cinza-produto-principal ">Peso em kilo grama: </td>
                    <td><input class="botao-produto-principal" type="text" name="'.$v12.'" placeholder="1"></td>
                </tr>
            </table>          
        <table class="">
        <input class="botao-enviar2-produto" type="submit">
        <div class=""></div>
            </div>
        </form>
        <div class="linha-central"></div>
        <?php
            $hostname = "127.0.0.1";
            $name = "root";
            $password = "root";
            $DB = "dados";
        
            $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB

           
            if ($conexao->connect_errno) {
                echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
                exit();
            } else {
                if(isset($_POST['vezes'])){ exibir();}else{
                }
                if(isset($_POST['$l'])){ salvar();}
            }
            ?>
    </div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>
<?php
function exibir(){
    }
function salvar(){
        $SQL = 'INSERT INTO `produto_p` (`cod_forne`,`tipo`,`date_v`,`lote`,`nome_p`,`marca_p`,`id_atividade'./*.esse_aqui_tem_problema.*/'`,`und`,`quant_und`,`quant_prod`,`valor_und`,`Kg`,`valor_total'./*.esse_aqui_tem_problema.*/'`) 
        VALUES ("' . $v1 . '","' . $v2 . '","' . $v3 . '","' . $v4 . '","' . $v5 . '","'.$v6.'","' . $v7 . '","' . $v8 . '","' . $v9 . '","' . $v10 . '","' . $v11 . '","'.$v12.'","'.$vtotal.'")';
        $resultado = $conexao->query($SQL);
    $conexao->close();
    header("Location: t_produto_p.php");
}

?>
</html>