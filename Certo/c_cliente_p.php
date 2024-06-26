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

    if(isset($_POST['vezes'])){
        $i = $_POST['vezes'];
        if($i <= 0){
        }else{
        $l = $i;
        $numero = 1;
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

    $SQL = 'INSERT INTO `clientes_p` (`CNPJ_c`,`nome_c`,`gmail_c`,`CEP_c`,`fone_c`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ');';
        }}
    $resultado = $conexao->query($SQL);

    $conexao->close();
    header("Location: t_cliente_p.php"); //Envia para a tela de Login ao Cadastrar
}
?>