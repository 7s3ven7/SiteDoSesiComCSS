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
    $v1 = $_POST['1']; //CNPJ
    $v2 = $_POST['2']; //nome do produto
    $v3 = $_POST['3']; //unidade
    $v4 = $_POST['4']; //quantidade de unidade
    $v5 = $_POST['5']; //quantidade de produto
    $v6 = $_POST['6']; //valor_und
    $v7 = $_POST['sinopse']; //sinopse

    $SQL = 'INSERT INTO `pedi_clientes_p` (`CNPJ`,`nome_prod`,`und`,`quant_und`,`quant_prod`,`valor_und`,`sinop`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ',' . $v6 . ',' . $v7 . ');';
    //Inserir no DB
    $resultado = $conexao->query($SQL);
    $conexao->close();
    header("Location: t_pedido.php"); //Envia para a tela de Login ao Cadastrar
}
?>