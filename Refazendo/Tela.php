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
    <link rel="stylesheet" href="tela.css">
    <meta http-equiv="Content-Type" content="text/html; charset= utf-8 " />
</head>
<body>
    <div class="texto">Menu</div>
    <div class="espaco-2">
    <form method="POST" action="Recebimento.php">
        <input type="submit" class="botao" value="Recebimento">
    </form>
    <form method="POST" action="Movimentacao.php">
        <input type="submit" class="botao" value="Movimentação">
    </form>
    <form method="POST" action="Estoque.php">
        <input type="submit" class="botao" value="Estoque">
    </form>
    <form method="POST" action="Picking.php">
        <input type="submit" class="botao" value="Picking">
    </form>
    <form method="POST" action="Expedicao.php">
        <input type="submit" class="botao" value="Expedição">
    </form>
    <form method="POST" action="Relatorio.php">
        <input type="submit" class="botao" value="Relatório">
    </form>
    <form method="POST" action="Controle.php">
        <input type="submit" class="botao" value="Controle">
    </form>
    </div>
    <div class="box"></div>


    <!--<div class="texto">Menu</div>
        <div class="box"><div class="texto-box">Bem vindo...</div>
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
        <br>-->
</body>

</html>