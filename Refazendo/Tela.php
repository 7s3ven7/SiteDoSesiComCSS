<!DOCTYPE html>
    <?php
        session_start();

        if (empty($_SESSION['tipo'])){
            header('Location: index.php');
            exit();
        } else {
            $nome = $_SESSION['tipo'];
            echo '<div class="nome"> Aluno: '.$_SESSION['tipo'].'</div>';
        }    
        ?>
    <head>
        <title>Teste de site</title>
        <link rel="stylesheet" href="CSS/tela.css">
        <meta http-equiv="Content-Type" content="text/html; charset= utf-8 " />
    </head>
    <body>
        <div class="texto">Menu</div>
        <div class="box"><div class="texto-box">Bem vindo...</div>
        <br>
        <div class="texto-box-mini">Agradecemos sinceramente por escolher nosso site entre tantas outras opções disponíveis. Sua visita é muito importante para nós, e estamos empenhados em fornecer a você a melhor experiência possível.</div>
        <br>
        <div class="texto-box-mini">Nosso site foi projetado para ser informativo, fácil de navegar e cheio de recursos valiosos. Queremos que você encontre tudo o que precisa e muito mais, tudo em um só lugar.</div>
        <br>
        <div class="texto-box-mini">Seja você um visitante pela primeira vez ou um usuário recorrente, esperamos que você aproveite seu tempo aqui. Estamos constantemente trabalhando para melhorar nosso site e adicionar novos conteúdos, então não deixe de nos visitar novamente em breve.</div>
        <br>
        <div class="texto-box-mini">Mais uma vez, obrigado por sua visita. Estamos ansiosos para atendê-lo e ajudá-lo a encontrar o que você está procurando.</div>
        <br>
        <div class="texto-box-mini">Equipe do Site legal :]</div>
    
    
    
    
        </div>
        <br><br><br><br>
        <form action="Recebimento.php">
        <input class="button" value="Recebimento" type="submit" >
        </form>
        <br>
        <form action="Movimentação.php">
        <input class="button" value="Movimentação" type="submit">
        </form>
        <br>
        <form action="Estoque.php">
        <input class="button" value="Estoque" type="submit">
        </form>
        <br>
        <form action="Picking.php">
        <input class="button" value="Picking" type="submit">
        </form>
        <br>
        <form action="Expedição.php">
        <input class="button" value="Expedição" type="submit">
        </form>
        <br>
        <form action="Relatórios.php">
        <input class="button" value="Relatórios" type="submit">
        </form>
        <br>
        <form action="Controle.php">
        <input class="button" value="Controle" type="submit">
        </form>
        <br>
        <form action="CriarMaterial.php">
        <input class="button" value="Criar material" type="submit">
        </form>
        <br>
        <form action="Mais.php">
        <input class="button" value="Mais" type="submit">
        </form>
        <br>
        <br>
    </body>
</html>