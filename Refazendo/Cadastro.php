<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="cadastro.css">
    </head>
    <body>
    <form method="POST" action="Action_Cadastro">
        <div class="box">
        <div class="texto">Faça o seu cadastro</div>
        <div class="espaco"></div>
        <div class="box-mini">
        <div class="texto-mini">Nome da conta</div>
        <input class="caixa-texto" type="text" placeholder="Nome" name="nome_conta">
        <div class="texto-mini">Crie uma senha</div>
        <input class="caixa-texto" type="text" placeholder="Senha" name="senha_conta">
        <div class="texto-mini">Código do grupo</div>
        <input class="caixa-texto" type="text" placeholder="TB-001" name="cod_grupo">
        <div class="texto-mini">Cargo</div>
        <input class="caixa-texto" type="text" placeholder="Auxiliar Geral" name="cargo">
        <div class="texto-mini">Código interno</div>
        <input class="caixa-texto" type="text" placeholder="*Opicional" name="cod_int">
        <br><br>
        <hr>
        </div>
        <br><br><br><br>
        <input class="botao" type="submit" value="Cadastrar">
    </form>
        </div>
    </body>
</html>