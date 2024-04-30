<!DOCTYPE html>
    <head>
        <title>Teste de site</title>
        <link rel="stylesheet" href="CSS/logar.css">
    </head>
    <body>
        <div class="box">
        <br>
        <div class="box-padding">
        <div class="title">Logar</div>
        <br>
        <div class="text-box"><div class="texto">Nome da conta</div></div>
        <form method="post" action="Action_Logar.php">
        <input class="bar" type="text" placeholder="Nome" name="Name_L">
        <br><br>
        <div class="text-box"><div class="texto">Senha</div></div>
        <input class="bar" type="password" placeholder="Senha" name="Senha_L">
        <br><br>
        <input class="button" type="submit" value="Entrar">
        </form>
        <br><hr><br>
        <div class="line-padding"><hr></div>
        <br>
        <div class="line-padding2"><hr></div>
        <br>
        <form action="Cadastro.php"><input class="button" type="submit" value="Cadastrar"></form>
        </div>
        </div>
    </body>
</html>