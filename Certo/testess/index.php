<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="caixa-centralizador">
        <div id="caixa-logar">
            <div CLASS="texto-grande-logar">Bem Vindo!</div>
            <div id="caixa-logar-dentro">
                <form method="POST" action="index.php">
                    <div class="texto-logar">Nome da conta</div>
                    <input class="botao-logar-input" type="text" placeholder="Nome" name="nome_conta">
                    <div class="texto-logar">Sua senha</div>
                    <input class="botao-logar-input" type="password" placeholder="Senha" name="senha_conta">
            </div>
            <input class="botao-logar-submit" type="submit" value="Logar">
            <hr>
            </form>
            <div class="texto-grande-logar">Novo aqui?</div>
            <form action="t_cadastro_conta.php">
                <input class="botao-logar-submit" value="Cadastrar-se" type="submit">
            </form>
        </div>
    </div>
    <!--Logar conta de usuario--><?php
                if(isset($_POST['nome_conta']) and isset($_POST['senha_conta'])){
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
			header('Location: t_p.php?nome='.$nome, true, 301);
			exit();
        }elseif($row[0] == 'Aluno' and $senha == $row[2]) {
			$conexao->close();
			header('Location: t_a.php?nome='.$nome, true, 301);
			exit();
		}       
        }else{
	        $conexao->close();
	        header('Location: index.php', true, 301);
	        exit();
}
}
?>
    <!--Trocar de senha--><?php
                if(isset($_POST['valor'])){
                $senha = '';
                $senha1 = '';
                $i = rand(4,10);
                for($i;0<=$i;$i){
                $digito = array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','Q','q','R','r','S','s','T','t','U','u','V','v','W','w','X','x','Y','y','Z','z','0','1','2','3','4','5','6','7','8','9','_','-');
                $numero = rand(0,63);
                $senha = $digito[$numero];
                $i -= 1;
                $senha1 = $senha1.$senha;
                }
                echo $senha1;}}
                ?>

</body>

</html>