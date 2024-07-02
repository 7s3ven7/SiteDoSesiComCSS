<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
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
    <div class=""></div>
    <details class="">
        <summary class="">Cadastros</summary>
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
    </div>

    <div class="">
        <form method="POST" action="t_empresa_p.php">
            <div class="">Quantas empresas irás registrar: <input class="" type="number" name="vezes"
                    placeholder="Número de vezes*"></div>
            <input class="" type="submit">
        </form>
        <?php
            if(isset($_POST['vezes'])){
                    $i = $_POST['vezes'];
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
            <div class="">'.$numero.'° Empresa</div>
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
                echo '<table class="">';}
                echo '<input class="" type="submit">';}}
                echo'<div class=""></div>';
                echo'</form>';
            ?>

    </div>
    <div id="tipo">Professor - <?php echo $nome;?></div>
</body>

</html>