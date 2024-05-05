<html>

</html>
<?php
session_start();

$hostname = "127.0.0.1";
$name ="root";
$password = "root";
$DB = "dados";
$conexao = new mysqli($hostname,$name,$password,$DB);
if($conexao -> connect_errno){
    echo "Failes conection :" .$conexao -> connect_error;
    exit();
}
else{
$nome = $conexao -> real_escape_string ($_POST["nome_conta"]);
$senha = $conexao -> real_escape_string ($_POST["senha_conta"]);
$SQL = "SELECT `id`, `tipo` FROM `usuario` WHERE `tipo` = '".$nome."' AND `senha` = '".$senha."'";
$resultado = $conexao -> query($SQL);
if($resultado->num_rows != 0)
	{
		$row = $resultado -> fetch_array();
		$_SESSION['id'] = $row[0];
		$_SESSION['tipo'] = $row[1];
		$conexao -> close();
		header('Location: tela.html', true, 301);
		exit();
	} else {
	$conexao -> close();
		header('Location: index.html', true, 301);
	}}
?>