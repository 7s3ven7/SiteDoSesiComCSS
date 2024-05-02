<html>
</html>
<?php
$hostname = "127.0.0.1";
$name ="root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname,$name,$password,$DB);

if($conexao -> connect_errno){
    echo "Failes conection: " .$conexao -> connect_error;
    exit();
}
else{
$nome = $conexao -> real_escape_string ($_POST["nome_conta"]);
$senha = $conexao -> real_escape_string ($_POST["senha_conta"]);
$codi = $conexao -> real_escape_string ($_POST["cod_int"]);
$codg = $conexao -> real_escape_string ($_POST["cod_grupo"]);
$cargo = $conexao -> real_escape_string ($_POST["cargo"]);

$SQL = 'INSERT INTO `usuario` (`tipo`,`senha`,`cod_grupo`,`cargo`,`cod_prof`) VALUES ("'.$nome.'","'.$senha.'","'.$codg.'","'.$cargo.'","'.$codi.'");';

$resultado = $conexao -> query($SQL);

$conexao -> close();
header("Location: Logar.php");
}
?>
