<!DOCTYPE html>
<?php
session_start();

if (empty($_SESSION['tipo'])) {
    header('Location: index.php');
    exit();
} else {
    $nome = $_SESSION['tipo'];
    echo '<div id="nome"> Aluno: ' . $_SESSION['tipo'] . '</div>';
}
?>

<head>
    <link rel="stylesheet" href="site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="menu">Menu</div>
    <form action="recebimento.html">
        <input class="botao" type="submit" value="Recebimento">
    </form>
    <form action="movimentacao.html">
        <input class="botao" type="submit" value="Movimentação">
    </form>
    <form action="estoque.html">
        <input class="botao" type="submit" value="Estoque">
    </form>
    <form action="picking.html">
        <input class="botao" type="submit" value="Picking">
    </form>
    <form action="espedicao.html">
        <input class="botao" type="submit" value="Espedição">
    </form>
    <form action="relatorio.html">
        <input class="botao" type="submit" value="Relatório">
    </form>
    <form action="controle.html">
        <input class="botao" type="submit" value="Controle">
    </form>
    <div class="caixa">
    </div>
</body>

</html>