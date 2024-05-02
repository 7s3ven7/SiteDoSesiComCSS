<?php
$hostname = "127.0.0.1";
$name ="root";
$password = "root";
$DB = "a";

$conexao = new mysqli($hostname,$name,$password,$DB);//Tenta conexão com o DB

if($conexao -> connect_errno){
    echo "Failed conection: " .$conexao -> connect_error; //erro caso não consiga conectar ao DB
    exit();
}
else{

$SQL = 'INSERT INTO `produto` (`cod`,`cod_inter`,`tipo`,`validade`,`nome`,`marca_produto`,`embalagem`,`und`,`QTD`,`valor_und`,`tamanho`,`NCM`,`CST`,`CFOP`) 
    VALUES ("1","1","1","1","1","1","1","1","1","1","1","1","1","1");';
//Inserir no DB

$resultado = $conexao -> query($SQL);

$conexao -> close();
}
?>
