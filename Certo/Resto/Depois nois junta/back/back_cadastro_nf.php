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

$SQL = 'INSERT INTO `produto` (`cod_fabri`,`tipo`,`validade`,`nome`,`marca_produto`,`embalagem`,`und`,`quantidade_und`,`valor_und`,`Kg/L`,`NCM`,`CST`,`CFOP`,`n_pedido`) 
    VALUES ("2","2","2","2","2","2","2","2","2","2","2","2","2","2");';
//Inserir no DB

$resultado = $conexao -> query($SQL);

$conexao -> close();
}
?>
