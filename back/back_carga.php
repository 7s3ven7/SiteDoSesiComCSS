<?php
$hostname = "127.0.0.1";
$name ="root";
$password = "root";
$DB = "a";

$conexao = new mysqli($hostname,$name,$password,$DB);//Tenta conexão com DB

if($conexao -> connect_errno){
    echo "Failes conection: " .$conexao -> connect_error; //erro caso não consiga conectar ao DB
    exit();
}
else{
$n_pedido = 8;

$SQL = "SELECT * 
            FROM `produto` 
            WHERE `n_pedido` = '".$n_pedido."'";

$resultado = $conexao -> query($SQL); //Faz a pesquisa dos dados no DB

if($resultado->num_rows != 0) //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
	{
		$row = $resultado -> fetch_array();
        echo 'Unidade: '. $row['und'];
        echo 'Quantidade: '. $row['QTD'];
        echo 'R$/unit: '. $row['valor_und'];
        echo 'Valor total: '.($row['QTD']*$row['valor_und']);
		$conexao -> close();
		exit();
	} else {
		$conexao -> close();
		header("Location: index.php");
		exit();
	}}
?>