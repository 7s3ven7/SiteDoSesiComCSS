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
$nome = $conexao -> real_escape_string ($_POST["Name_C"]);
$senha = $conexao -> real_escape_string ($_POST["Senha_C"]);
$CodI = $conexao -> real_escape_string ($_POST["Cod_I_C"]);
$CodG = $conexao -> real_escape_string ($_POST["Cod_G_C"]);
$Cargo = $conexao -> real_escape_string ($_POST["Cargo_C"]);

$SQL = 'INSERT INTO `usuario` (`tipo`,`senha`,`cod_grupo`,`cargo`,`cod_prof`) VALUES ("'.$nome.'","'.$senha.'","'.$CodG.'","'.$Cargo.'","'.$CodI.'");';

$resultado = $conexao -> query($SQL);

$conexao -> close();
header("Location: Logar.php");
}
?>
