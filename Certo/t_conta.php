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
            <form method="POST" action="c_cadastro_geral.php">
                <div class="texto-mini">Nome da conta</div>
                <input class="caixa-texto" type="text" placeholder="Nome" name="nome_criado">
                <div class="texto-mini">Crie sua senha</div>
                <input class="caixa-texto" type="password" placeholder="Senha" name="senha_criada">
                <div class="texto-mini">Seu cargo</div>
                <input class="caixa-texto" type="text" placeholder="Cargo" name="cargo_criado">
                <div class="texto-mini">Código da Sala</div>
                <input class="caixa-texto" type="text" placeholder="PT-0001" name="codigo_sala_criado">
                <div class="texto-mini">Código Interno</div>
                <input class="caixa-texto" type="text" placeholder="*Opicional" name="codigo_interno_criado">
        </div>
        <input class="botao" type="submit" value="Cadastrar-se">
        </form>
    </div>
</body>

</html>