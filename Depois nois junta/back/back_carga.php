<?php
$hostname = "127.0.0.1";
$name ="root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname,$name,$password,$DB);//Tenta conexão com DB

if($conexao -> connect_errno){
    echo "Failes conection: " .$conexao -> connect_error; //erro caso não consiga conectar ao DB
    exit();
}
else{
$n_pedido = 2;

$SQL = "SELECT * 
            FROM `produto` 
            WHERE `n_pedido` = '".$n_pedido."'";

$resultado = $conexao -> query($SQL); //Faz a pesquisa dos dados no DB

if($resultado->num_rows != 0) //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
	{
		for($i=1;$i<=$resultado->num_rows;$i++){
			$row = $resultado -> fetch_array();
			echo 'Produto: '. $row['nome'];
        	echo 'Unidade: '. $row['und'];
       		echo 'Quantidade: '. $row['quantidade_und'];
        	echo 'R$/unit: '. $row['valor_und'];
        	echo 'Valor total: '.($row['quantidade_und']*$row['valor_und']);
		}
	} else {
		$conexao -> close();
		header("Location: index.php");
		exit();
	}}
	for($i=0;$i<=$resultado->num_rows;$i++)
?>

<?php

if(isset($_POST['1'])){
    $v1 = 'v';
} else {
    $v1 = 'f';
}

if(isset($_POST['2'])){
    $v2 = 'v';
} else {
    $v2 = 'f';
}

p?>