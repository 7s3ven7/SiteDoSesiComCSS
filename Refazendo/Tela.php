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
    <div class="espaco">
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
</body>

</html>