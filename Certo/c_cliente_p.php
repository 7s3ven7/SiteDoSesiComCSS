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
    $a = $_POST['cnpj']; //CNPJ
    $b = $_POST['nome_fornecedor']; //Nome do fornecedor
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

    $SQL = 'INSERT INTO `clientes_p` (`CNPJ_c`,`nome_c`,`gmail_c`,`CEP_c`,`fone_c`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ');';
        }}
    $resultado = $conexao->query($SQL);

    $conexao->close();
    header("Location: t_cliente_p.php"); //Envia para a tela de Login ao Cadastrar
}
?>