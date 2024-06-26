<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_inicio.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="caixa-mini-atividade-toda">
        <div class="caixa-mini-atividade">
            <form method="GET" action="t_p.php">
                <div class="texto-atividade">Selecione a atividade!</div>
                <input class="caixa-texto" type="text" placeholder="nome" name="nome_atividade">
        </div>
        <input class="botao" type="submit" value="Logar">
    </div>
</body>

</html>
<?php
if(isset($_GET['nome_atividade'])){
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


    }}}
?>