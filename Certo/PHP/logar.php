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

$SQL = "SELECT `tipo`, `nome`, `senha` FROM `usuario` WHERE `nome` = '" . $nome . "' AND `senha` = '" . $senha . "'";

$result = $conexao->query($SQL);
if ($result->num_rows > 0) {
	$row = $result->fetch_array();
	$_SESSION['tipo'] = $row[0];
	$_SESSION['nome'] = $row[1];

	$SQL = "SELECT `tipo`, `nome`, `senha` FROM `usuario` WHERE `nome` = '" . $nome . "' AND `senha` = '" . $senha . "'";

	$result = $conexao->query($SQL);
	if ($result->num_rows > 0) {
		$row = $result->fetch_array();
		$_SESSION['tipo'] = $row[0];
		$_SESSION['nome'] = $row[1];
		$_SESSION['senha'] = $row[2];
		if ($row[1] == 'professor' and $senha == $row[2]) {
			$conexao->close();
			header('Location: ../HTML/tela_professor.html', true, 301);
			exit();
		}elseif ($_SESSION['tipo'] != 'professor' and $senha == $row[2]) {
			$conexao->close();
			header('Location: ../HTML/tela.php', true, 301);
			exit();
		}
}
}
else{
	$conexao->close();
	header('Location: ../HTML/index.html', true, 301);
	exit();
}
}
?>