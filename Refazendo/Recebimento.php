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
    <link rel="stylesheet" href="recebimento.css">
    <meta http-equiv="Content-Type" content="text/html; charset= utf-8 " />
</head>

<body>
    <div class="texto">Menu</div>
    <div class="espaco">
        <div>
            <form method="" action="Tela.php">
                <input type="submit" id="botao" value="Recebimento">
            </form>
            <div class="box-mini">
                <form method="" action="Carga.php">
                    <input type="submit" class="botao-mini" value="Carga">
                </form>
                <form method="" action="Conferencia.php">
                    <input type="submit" class="botao-mini" value="Conferencia">
                </form>
            </div>
        </div>
        <br>
        <form method="" action="Movimentacao.php">
            <input type="submit" class="botao" value="Movimentação">
        </form>
        <form method="" action="Estoque.php">
            <input type="submit" class="botao" value="Estoque">
        </form>
        <form method="P" action="Picking.php">
            <input type="submit" class="botao" value="Picking">
        </form>
        <form method="" action="Expedicao.php">
            <input type="submit" class="botao" value="Expedição">
        </form>
        <form method="" action="Relatorio.php">
            <input type="submit" class="botao" value="Relatório">
        </form>
        <form method="" action="Controle.php">
            <input type="submit" class="botao" value="Controle">
        </form>
    </div>
    <div class="box">Bem Vindo...</div>
</body>

</html>