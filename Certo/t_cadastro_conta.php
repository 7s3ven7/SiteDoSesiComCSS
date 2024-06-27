<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_inicio.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <div class="caixa">
        <div class="texto">Cadastre-se!</div>
        <div class="caixa-mini-cadastro">
            <form method="POST" action="t_cadastro_conta.php">
                <div class="texto-mini">Nome da conta</div>
                <input class="caixa-texto" type="text" placeholder="Nome" name="nome_criado">
                <div class="texto-mini">Crie sua senha</div>
                <input class="caixa-texto" type="password" placeholder="Senha" name="senha_criada">
                <div class="texto-mini">Código Interno</div>
                <input class="caixa-texto" type="text" placeholder="*Opicional" name="codigo_interno_criado">
        </div>
        <input class="botao" type="submit" value="Cadastrar-se">
        </form>
    </div>
</body>

</html>
<!--Cadastro de usuario--><?php if(isset($_POST['nome_criado']) and isset($_POST['senha_criada']) and isset($_POST['cargo_criado']) and isset($_POST['codigo_sala_criado']) and isset($_POST['codigo_interno_criado'])){
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);
if ($conexao->connect_errno) {
    echo "Failes conection: " . $conexao->connect_error;
    exit();
} else {
    $nome = $conexao->real_escape_string($_POST["nome_criado"]);
    $senha = $conexao->real_escape_string($_POST["senha_criada"]);
    $cargo = $conexao->real_escape_string($_POST["cargo_criado"]);
    $codg = $conexao->real_escape_string($_POST["codigo_sala_criado"]);
    $codp = $conexao->real_escape_string($_POST["codigo_interno_criado"]);

    if($senha == $codp){
        $SQL = 'INSERT INTO `usuario` (`nome_u`,`tipo_u`,`senha`,`cod_grupo`,`cargo_u`,`cod_prof`) VALUES ("' . $nome . '","Professor","' . $senha . '","' . $codg . '","' . $cargo . '","' . $codp . '");';
        $resultado = $conexao->query($SQL);
        $conexao->close();
        header("Location: index.php");
    }else{

    $SQL = 'INSERT INTO `usuario` (`nome_u`,`tipo_u`,`senha`,`cod_grupo`,`cargo_u`,`cod_prof`) VALUES ("' . $nome . '","Aluno","' . $senha . '","' . $codg . '","' . $cargo . '","' . $codp . '");';
    $resultado = $conexao->query($SQL);
    $conexao->close();
    header("Location: index.php");
}}}
?>