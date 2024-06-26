<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_inicio.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php
$nome = $_GET['nome'];?>

<body>
    <div class="caixa-mini-atividade-toda">
        <div class="caixa-mini-atividade">
            <form method="POST" action="t_atividade.php?nome=<?php echo $nome;?>">
                <div class="texto-atividade">Selecione a atividade!</div>
                <input class="caixa-texto" type="text" placeholder="nome" name="nome_atividade">
        </div>
        <input class="botao" type="submit" value="Logar">
    </div>
</body>

</html>
<?php
if(isset($_POST['nome_atividade'])){
$hostname = "127.0.0.1";
$name = "root";
$password = "root"; 
$DB = "dados";
$conexao = new mysqli($hostname, $name, $password, $DB);
if ($conexao->connect_errno) {
	echo "Failes conection :" . $conexao->connect_error;
	exit();
} else {
$nome_atividade = $_POST['nome_atividade'];
$SQL = "SELECT `tipo_u` FROM `usuario` WHERE `nome_u` = '" . $nome . "'";

	$result = $conexao->query($SQL);
	if ($result->num_rows != 0) {
		$row = $result->fetch_array();
		$tipo = $row[0];
        if($tipo == 'Aluno'){
            header('location:t_a.php?nome='.$nome.'&nome_atividade='.$nome_atividade.'');
        }if($tipo == 'Professor'){
            header('location:t_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade.'');
        }
    }}}
?>