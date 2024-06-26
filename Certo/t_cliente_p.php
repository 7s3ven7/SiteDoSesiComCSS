<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>
<?php
    $nome_atividade = $_GET('nome_atividade')
?>

<body>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form action="t_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Inicio"></div>
        </form>
        <form action="index.php">
            <input class="details-small" type="submit" value="Sair"></div>
        </form>
        <form action="t_reset_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Resetar"></div>
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Cadastros</summary>
        <form action="t_fornecedor_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form action="t_empresa_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form action="t_cliente_p.php?nome_atividade=<?php echo $nome_atividade;?>">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form action="t_p.php?nome_atividade=<?php echo $nome_atividade;?>">
                <input class="details-small" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="details-all">
        <summary class="details-big">Produto</summary>
        <form action="t_produto_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="t_quantitativo_r_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo"></div>
        </form>
        <form action="t_nota_r_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="t_quantitativo_e_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form action="t_nota_e_pr.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class="details-caixa"></div>
    <div class="menu">Menu</div>
    <div class="caixa">
    </div>
    <div class="caixa-fixa">
        <form method="POST" action="t_cliente_p.php">
            <div class="texto-produto">Quantos clientes irás registrar: <input class="botao-produto" type="number"
                    name="vezes" placeholder="Número de vezes*"></div>
            <input class="enviar-numero-produto" type="submit">
        </form>
        <?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

session_start();

$conexao = new mysqli($hostname, $name, $password, $DB);

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
        $v2 = 'nome_cliente';
        $v3 = 'gmail';
        $v4 = 'cep';
        $v5 = 'telefone';
        echo '<form method="POST" action="t_cliente_p.php" name="cadastro">';
        echo '<br>';
        for($i;$i>0;$i){
            $i -= 1;
            echo'
                <div class="numero-produto">'.$numero.'° Cliente</div>
                <br>
                <table class="tabela-mini">
                    <tr>
                        <td class="texto-tabela-mini">CNPJ/CPF: </td>
                        <td><input class="botao-tabela" type="text" name="'.$v1.'" placeholder="00.000.000/0000-00 ou 000.000.000-00"></td>
                        <td class="texto-tabela-mini">Nome do cliente: </td>
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
            $v1 = $v1.'p';
            $v2 = $v2.'p';
            $v3 = $v3.'p';
            $v4 = $v4.'p';
            $v5 = $v5.'p';
                    }         
            echo '</form>';     
            echo '<table class="table">';
            echo '<input class="botao" type="submit">';
            echo'<div class="details-caixa-2"></div>';
            if(isset($_POST['cadastro'])){
            echo 'oi';
                $a = $_POST['cnpj']; //CNPJ
                $b = $_POST['nome_cliente']; //Nome do fornecedor
                $c = $_POST['gmail']; //Email
                $d = $_POST['cep']; //CEP
                $e = $_POST['telefone']; //Telefone
                $id_atividade = $_GET['id_atividade'];
                $l = $_GET['$l'];
                
                while($l>0){
                    $v1 = $_POST[$a];
                    $v2 = $_POST[$b];
                    $v3 = $_POST[$c];
                    $v4 = $_POST[$d];
                    $v5 = $_POST[$e];
                    $v6 = $_POST[$f];
                    $vtotal = $v11 * ($v9*$v10);
                    for($z = 1;$z>0;$z){
                        $SQL = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`nome_f`,`gmail_f`,`CEP_f`,`fone_f`,`id_atividade`) 
                        VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ','.$id_atividade.');';
                        $resultado = $conexao->query($SQL);
                        $z -= 1;
                        }
                    $z = 1;
                    $a = $a.'p';
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
                    $l -= 1;
                }
                $v1 = 'cnpj';
                $v2 = 'nome_cliente';
                $v3 = 'gmail';
                $v4 = 'cep';
                $v5 = 'telefone';
                for($i;$i>0;$i){
                    $i -= 1;
                    $numero += 1;
                    $v1 = $v1.'p';
                    $v2 = $v2.'p';
                    $v3 = $v3.'p';
                    $v4 = $v4.'p';
                    $v5 = $v5.'p';
                    }
                $v1 = $_POST['1'];
                $v2 = $_POST['2'];
                $v3 = $_POST['3'];
                $v4 = $_POST['4'];
                $v5 = $_POST['5'];

                $SQL = 'INSERT INTO `cliente_p` (`CNPJ_c`,`nome_c`,`gmail_c`,`CEP_c`,`fone_c`) 
                VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ');';
                    
                $resultado = $conexao->query($SQL);

                $conexao->close();
                header("Location: t_cliente_p.php"); //Envia para a tela de Login ao Cadastrar

            }
    }
}
                echo'</form>';

            ?>
    </div>

    <div id="tipo">Conta: Professor</div>

</body>

</html>