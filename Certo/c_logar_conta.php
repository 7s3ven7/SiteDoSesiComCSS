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

$SQL = "SELECT `tipo_u`, `nome_u`, `senha` FROM `usuario` WHERE `nome_u` = '" . $nome . "' AND `senha` = '" . $senha . "'";

	$result = $conexao->query($SQL);
	if ($result->num_rows != 0) {
		$row = $result->fetch_array();
		$_SESSION['tipo_u'] = $row[0];
		$_SESSION['nome_u'] = $row[1];
		$_SESSION['senha'] = $row[2];
		if ($row[0] == 'Professor' and $senha == $row[2]) {
			$conexao->close();
			header('Location: t_atividade_p.php', true, 301);
			exit();
		}elseif ($row[0] == 'Aluno' and $senha == $row[2]) {
			$conexao->close();
			header('Location: t_a.php', true, 301);
			exit();
		}
}else{
	$conexao->close();
	header('Location: index.php', true, 301);
	exit();
}
}

?>