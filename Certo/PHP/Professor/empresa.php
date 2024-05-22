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
    $v2 = $_POST['2']; //Nome do gerente
    $v3 = $_POST['3']; //Email
    $v4 = $_POST['4']; //Telefone
    $v5 = $_POST['5']; //CEP

    $SQL = 'INSERT INTO `nossa_empresa_p` (`CNPJ_empresa`,`gerente`,`gmail`,`fone`,`CEP`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ');';
    //Inserir no DB
    $resultado = $conexao->query($SQL);

    $conexao->close();
    header("Location: ../../HTML/movimentacao.html"); //Envia para a tela de Login ao Cadastrar
}
?>