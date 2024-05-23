<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html" ;charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
</head>

<body>
    <div class="menu">Menu</div>
    <form action="../../HTML/Aluno/recebimento.html">
        <input class="botao" type="submit" value="Recebimento">
    </form>
    <div class="caixa-botao-mini">
        <form action="qualitativo.php">
            <input class="botao-mini" type="submit" value="Qualitativo">
        </form>
    </div>
    <div class="caixa-botao-mini">
        <form action="quantitativo.php">
            <input id="botao-mini" type="submit" value="Quantitativo">
        </form>
    </div>
    <form action="movimentacao.html">
        <input class="botao" type="submit" value="Movimentação">
    </form>
    <form action="estoque.html">
        <input class="botao" type="submit" value="Estoque">
    </form>
    <form action="picking.html">
        <input class="botao" type="submit" value="Picking">
    </form>
    <form action="expedicao.html">
        <input class="botao" type="submit" value="Expedição">
    </form>
    <form action="relatorios.html">
        <input class="botao" type="submit" value="Relatórios">
    </form>
    <br>
    <br>
    <form action="controle.html">
        <input class="botao" type="submit" value="Controle">
    </form>
    <div class="caixa">
        <form method="POST" action="action_quantitativo.php">
            <div class="texto5">Número do pedido:
                <input class="botao-tabela2" type="number" name="n_pedido">
        </form>
    </div>
    <div class="texto5">Número da nota:
        <br>
        Doca:
    </div>