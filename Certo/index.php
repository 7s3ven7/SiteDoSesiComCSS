<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_inicio.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="caixa">
        <div class="texto">Bem Vindo!</div>
        <div class="caixa-mini">
            <form method="POST" action="c_logar_conta.php">
                <div class="texto-mini">Nome da conta</div>
                <input class="caixa-texto" type="text" placeholder="Nome" name="nome_conta">
                <div class="texto-mini">Sua senha</div>
                <input class="caixa-texto" type="password" placeholder="Senha" name="senha_conta">
        </div>
        <input class="botao" type="submit" value="Logar">
        <hr>
        </form>
        <div class="texto">Novo aqui?</div>
        <form action="cadastro.html">
            <input class="botao" value="Cadastrar-se" type="submit">
        </form>
        <form method="POST" action="t_senhanova_p.php">
            <input type="submit" value="trocar senha">
        </form>
    </div>
</body>

</html>