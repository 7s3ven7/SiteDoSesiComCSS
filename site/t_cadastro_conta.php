<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <div class="caixa-fundo">
        <div class="caixa-meio-cadastro">
            <div class="texto-grande">Cadastre-se</div>
            <form method="POST" action="t_cadastro_conta.php" ?nome;redirect();>
                <div class="caixa-cadastro-dentro">
                    <div class="texto-medio">Nome da conta</div>
                    <input class="botao-cadastro-input" type="text" placeholder="Professor 1" name="nome_criado"
                        required>
                    <div class="texto-medio">Crie sua senha</div>
                    <input class="botao-cadastro-input" type="password" placeholder="escolha uma senha forte"
                        name="senha_criada" required>
                    <div class="texto-medio">Código Interno</div>
                    <input class="botao-cadastro-input" type="text" placeholder="código do seu crachá"
                        name="codigo_professor_criado" required>
                </div>
                <input class="botao-cadastro-submit" type="submit" value="Cadastrar-se">
                <hr>
            </form>
            <div class="caixa-cadastro-dentro-baixo">
                <div class="texto-grande-mini">Logar-se</div>
                <form action="index.php">
                    <input class="botao-cadastro-submit" value="Logue-se" type="submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!--Cadastro de usuario-->
<?php
    if(isset($_POST['nome_criado']) and isset($_POST['senha_criada'])){
    $hostname = "127.0.0.1";
    $name = "u935055604_wesley";
    $password = "XwZX1383";
    $DB = "u935055604_dados";
        $conexao = new mysqli($hostname, $name, $password, $DB);
        if ($conexao->connect_errno) {
            echo "Failes conection: " . $conexao->connect_error;
            exit();
        } else {
            if(isset($_POST['nome_criado']) and isset($_POST['senha_criada']) and $_POST['codigo_professor_criado']!=''){
                $nome = $conexao->real_escape_string($_POST["nome_criado"]);
                $senha = $conexao->real_escape_string($_POST["senha_criada"]);
                $codp = $conexao->real_escape_string($_POST["codigo_professor_criado"]);

                $SQL = 'INSERT INTO `usuario` (`nome_u`,`tipo_u`,`senha`,`cod_prof`) VALUES ("' . $nome . '","Professor","' . $senha . '","' . $codp . '");';

                $resultado = $conexao->query($SQL);
                $conexao->close();
                header("Location: index.php");
            }
        }  
    }
?>