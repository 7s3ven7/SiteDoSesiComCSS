<?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
if ($conexao->connect_errno) {
    echo "Failed connection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    header("Location: t_a.php");
    exit();
} else {
    $n_pedido=$_POST['n_pedido'];
    $SQL = 'SELECT * FROM `produto_p` 
    WHERE `n_pedido` = '.$n_pedido.';';
    //Inserir no DB
    $resultado = $conexao->query($SQL); //Envia para a tela de Login ao Cadastrar
    if($resultado->num_rows != 0) //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
	{
		for($i=1;$i<=$resultado->num_rows;$i++){
			$row = $resultado -> fetch_array();
		}
	} else {
		$conexao -> close();
		exit();
	}
}
?>