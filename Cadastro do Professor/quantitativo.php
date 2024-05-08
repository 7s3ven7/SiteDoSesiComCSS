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
    $v1 = $_POST['1']; //cod_inter
    $v2 = $_POST['2']; //cod_forne
    $v3 = $_POST['3']; //nome_empre
    $v4 = $_POST['4']; //CNPJ_empre
    $v5 = $_POST['5']; //modelo_conta
    $v6 = $_POST['6']; //navio
    $v7 = $_POST['7']; //nome_dest
    $v8 = $_POST['8']; //tipo_container
    $v9 = $_POST['9']; //lacre
    $v10 = $_POST['10']; //lacre_SIF
    $v11 = $_POST['11']; //temperatura
    $v12 = $_POST['12']; //IMO
    $v13 = $_POST['13']; //n_ONU
    $v14 = $_POST['14']; //nome_prod
    $v15 = $_POST['15']; //und
    $v16 = $_POST['16']; //quant_produto
    $v17 = $_POST['17']; //quant_und
    $v18 = $_POST['18']; //lote
    $v19 = $_POST['19']; //CNPJ_dest
    $v20 = $_POST['20']; //n_pedido

    $SQL = 'INSERT INTO `quantitativa_p` (`cod_inter`,`cod_forne`,`nome_empre`,`CNPJ_empre`,`modelo_conta`,`navio`,`nome_dest`,`tipo_container`,`lacre`,`lacre_SIF`,`temperatura`,`IMO`,`n_ONU`,`nome_prod`,`und`,`quant_produto`,`quant_und`,`lote`,`CNPJ_dest`,`n_pedido`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ',' . $v6 . ',' . $v7 . ',' . $v8 . ',' . $v9 . ',' . $v10 . ',' . $v11 . ',' . $v12 . ',' . $v13 . ',' . $v14 . ',' . $v15 . ',' . $v16 . ',' . $v17 . ',' . $v18 . ',' . $v19 . ',' . $v20 . ');';
    //Inserir no DB

    $resultado = $conexao->query($SQL);

    $conexao->close();
    header("Location: qualitativo.php"); //Envia para a tela de Login ao Cadastrar
}
?>