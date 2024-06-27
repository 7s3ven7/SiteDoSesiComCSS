<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>
<?php
    $nome_atividade = $_GET['nome_atividade'];
    $nome = $_GET['nome'];
?>

<body>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form method="POST" action="t_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Inicio"></div>
        </form>
        <form method="POST" action="index.php">
            <input class="details-small" type="submit" value="Sair"></div>
        </form>
        <form method="POST"
            action="t_reset_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Resetar"></div>
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
    </div>

    <div class="caixa-fixa">
        <form method="POST" action="t_fornecedor_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <div class="texto-produto">Quantos fornecedores irás registrar: <input class="botao-produto" type="number"
                    name="vezes" placeholder="Número de vezes*"></div>
            <input class="enviar-numero-produto" type="submit">
        </form>
        <!--Aparecer na Tela--><?php
            if(isset($_POST['vezes'])){
                    $i = $_POST['vezes'];
                    if($i <= 0){
                        echo '
                        <br><br>
                        <div class="texto-produto">Digite um número superior!</div>';
                    }else{
                    $l = $i;
                    $numero = 1;
                    $v1 = 'cnpj';
                    $v2 = 'nome_fornecedor';
                    $v3 = 'gmail';
                    $v4 = 'cep';
                    $v5 = 'telefone';
                echo'<form method="POST" action="t_fornecedor_p.php?$l='.$l.'&nome_atividade='.$nome_atividade.'">';
                echo'<br>';
                    for($i;$i>0;$i){
                    $i -= 1;
                    echo'
            <div class="numero-produto">'.$numero.'° Fornecedor</div>
            <br>
            <form method="POST" action="t_fornecedor_p.php?$l='.$l.'&nome_atividade='.$nome_atividade.'" name="cadastro">
            <table class="tabela-mini">
                <tr>
                    <td class="texto-tabela-mini">CNPJ: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v1.'" placeholder="00.000.000/0000-00"></td>
                    <td class="texto-tabela-mini">Nome do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v2.'" placeholder="Nome"></td>
                <tr>
                    <td class="texto-tabela-mini">Gmail: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v3.'" placeholder="exemplo@gmail.com"></td>
                    <td class="texto-tabela-mini">CEP: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v4.'" placeholder="0000-000"></td>
                </tr>
                <tr>
                    <td class="texto-tabela-mini">Telefone: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v5.'" placeholder="(00) 00000-0000 "></td>
                </tr>
            </table>';
            $numero += 1;
                    }              
                echo '<table class="table">';
                echo '<input class="botao" type="submit">';
                echo'<div class="details-caixa-2"></div>';}
            }

$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB

if(isset($_POST['cadastro'])){
    echo 'oi';
    $v1 = $_POST['cnpj']; //CNPJ
    $v2 = $_POST['nome_fornecedor']; //Nome do fornecedor
    $v3 = $_POST['gmail']; //Email
    $v4 = $_POST['cep']; //CEP
    $v5 = $_POST['telefone']; //Telefone
    $v6 = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $z = $_GET[$l];
    
    while($z>0){
        for($zz = 1;$zz>0;$zz){
            $SQL = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`nome_f`,`gmail_f`,`CEP_f`,`fone_f`,`cod_forne`) 
            VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ','.$v6.');';
            $resultado = $conexao->query($SQL);
            $zz -= 1;
            }
        
/*        $a = $a.'p';
        $b = $b.'p';
        $c = $c.'p';
        $d = $d.'p';
        $e = $e.'p';
        $f = $f.'p';
        $g = $g.'p';
        $h = $h.'p';
        $i = $i.'p';
        $j = $j.'p';
        $k = $k.'p';
        $l = $l.'p';
        $z -= 1;*/
    }

    /*$id_atividade = 1;
    $SQL = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`nome_f`,`gmail_f`,`CEP_f`,`fone_f`,`cod_forne`,`id_atividade`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ','.$v6.','.$nome_atividade.');';
    $resultado = $conexao->query($SQL);*/
    $conexao->close();
    header("Location: t_fornecedor_p.php"); //Envia para a tela de Login ao Cadastrar
}
?>
    </div>
    <div id="tipo">Conta: <?php echo $nome;?></div>
</body>

</html>