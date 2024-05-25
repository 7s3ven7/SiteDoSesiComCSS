<?php
$hostname = "127.0.0.1";
$name ="root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname,$name,$password,$DB);//Tenta conexão com o DB

if($conexao -> connect_errno){
    echo "Failed conection: " .$conexao -> connect_error; //erro caso não consiga conectar ao DB
    exit();
}
else{

    $v1 = $_POST['1']; //cod_forne
    $v2 = $_POST['2']; //tipo
    $v3 = $_POST['3']; //validade
    $v4 = $_POST['4']; //lote
    $v5 = $_POST['5']; //nome
    $v6 = $_POST['6']; //marca_produto
    $v7 = $_POST['7']; //embalagem
    $v8 = $_POST['8']; //und
    $v9 = $_POST['9']; //quantidade_und
    $v10 = $_POST['10']; //valor_und
    $v11 = $_POST['11']; //quant_prod
    $v12 = $_POST['12']; //Kg
    $v13 = $_POST['13']; //n_pedido
    $v14 = $_POST['14']; //
    $v15 = $_POST['15']; //
    $v16 = $_POST['16']; //
    $v17 = $_POST['17']; //
    $v18 = $_POST['18']; //
    $v19 = $_POST['19']; //
    $v20 = $_POST['20']; //

$SQL = 'INSERT INTO `produto` (`cod_forne`,`tipo`,`validade`,`lote`,`nome`,`marca_produto`,`embalagem`,`und`,`quantidade_und`,`valor_und`,`quant_prod`,`Kg`,`n_pedido`) 
    VALUES ('.$v1.','.$v2.','.$v3.','.$v4.','.$v5.','.$v6.','.$v7.','.$v8.','.$v9.','.$v10.','.$v11.','.$v12.','.$v13.','.$v14.');';
//Inserir no DB

$resultado = $conexao -> query($SQL);

$conexao -> close();
}
?>
