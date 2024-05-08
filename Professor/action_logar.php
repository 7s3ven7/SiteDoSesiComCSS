<html>

</html>
<?php
session_start();

$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";
$conexao = new mysqli($hostname, $name, $password, $DB);
if ($conexao->connect_errno) {
	echo "Failes conection :" . $conexao->connect_error;
	exit();
} else {
	$nome = $conexao->real_escape_string($_POST["nome_conta"]);
	$senha = $conexao->real_escape_string($_POST["senha_conta"]);
	$SQL = "SELECT `id`, `tipo`, `senha` FROM `usuario` WHERE `tipo` = '" . $nome . "' AND `senha` = '" . $senha . "'";
	$resultado = $conexao->query($SQL);
	if ($resultado->num_rows != 0) {
		$row = $resultado->fetch_array();
		$_SESSION['id'] = $row[0];
		$_SESSION['tipo'] = $row[1];
		if ($row[1] == 'professor' and $senha == $row[2]) {
			$conexao->close();
			header('Location: tela_professor.html', true, 301);
			exit();
		}elseif ($_SESSION['tipo'] != 'professor' and $senha == $row[2]) {
			$conexao->close();
			header('Location: tela.php', true, 301);
			exit();
		}
	}else {
		$conexao->close();
		header('Location: index.html', true, 301);
	}
}
?>