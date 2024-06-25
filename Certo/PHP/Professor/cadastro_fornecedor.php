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
    $v1 = $_POST['cnpj']; //CNPJ
    $v2 = $_POST['nome_fornecedor']; //Nome do fornecedor
    $v3 = $_POST['gmail']; //Email
    $v4 = $_POST['cep']; //CEP
    $v5 = $_POST['telefone']; //Telefone
    $z = $_GET['$l'];
    
    while($z>0){
        $v1 = $_POST[$a];
        $v2 = $_POST[$b];
        $v3 = $_POST[$c];
        $v4 = $_POST[$d];
        $v5 = $_POST[$e];
        $vtotal = $v11 * ($v9*$v10);
        for($zz = 1;$zz>0;$zz){
            $SQL = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`nome_f`,`gmail_f`,`CEP_f`,`fone_f`,`cod_forne`,`id_atividade`) 
            VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ','.$v6.','.$id_atividade.');';
            $resultado = $conexao->query($SQL);
            $zz -= 1;
            }
        $zz = 1;
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
        $z -= 1;
    }
    $v6 = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $id_atividade = 1;
    $SQL = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`nome_f`,`gmail_f`,`CEP_f`,`fone_f`,`cod_forne`,`id_atividade`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ','.$v6.','.$id_atividade.');';
    $resultado = $conexao->query($SQL);
    $conexao->close();
    header("Location:fornecedor.php"); //Envia para a tela de Login ao Cadastrar
}
?>