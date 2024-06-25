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
    $v1 = $_POST['1']; //CPF
    $v2 = $_POST['2']; //Nome do Cliente
    $v3 = $_POST['3']; //Gmail
    $v4 = $_POST['4']; //CEP
    $v5 = $_POST['5']; //Telefone

    $SQL = 'INSERT INTO `clientes_p` (`CNPJ`,`nome_c`,`gmail`,`CEP`,`fone`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ');';
    //Inserir no DB
    $resultado = $conexao->query($SQL);

    $conexao->close();
    header("Location: t_cliente_p.php"); //Envia para a tela de Login ao Cadastrar
}
?>