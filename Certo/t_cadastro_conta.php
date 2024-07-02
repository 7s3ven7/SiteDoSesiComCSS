<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <div class="caixa-centralizador">
        <div class="caixa-logar-cadastro">
            <div class="texto-grande-logar">Cadastre-se</div>
            <form method="POST" action="t_cadastro_conta.php">
                <div class="caixa-cadastro-dentro">
                    <div class="texto-logar">Nome da conta</div>
                    <input class="botao-logar-input" type="text" placeholder="Nome" name="nome_criado">
                    <div class="texto-logar">Crie sua senha</div>
                    <input class="botao-logar-input" type="password" placeholder="Senha" name="senha_criada">
                    <div class="texto-logar">Código Interno</div>
                    <input class="botao-logar-input" type="text" placeholder="*Opicional" name="codigo_interno_criado">
                </div>
                <input class="botao-logar-submit" type="submit" value="Cadastrar-se">
                <hr>
            </form>
            <div class="texto-grande-logar">Já tem conta?</div>
            <form action="index.php">
                <input class="botao-logar-submit" value="Logue-se" type="submit">
            </form>
        </div>
    </div>
</body>

</html>
<!--Cadastro de usuario-->
<?php
    if(isset($_POST['nome_criado']) and isset($_POST['senha_criada'])and isset($_POST['codigo_interno_criado'])){
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
            $codp = $conexao->real_escape_string($_POST["codigo_interno_criado"]);
            $SQL = 'INSERT INTO `usuario` (`nome_u`,`tipo_u`,`senha`,`cod_prof`) VALUES ("' . $nome . '","Professor","' . $senha . '","' . $codp . '");';
            $resultado = $conexao->query($SQL);
            $conexao->close();
            header("Location: index.php");
        }
    }
?>