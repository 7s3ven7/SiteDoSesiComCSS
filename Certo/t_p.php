<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
</head>

<body>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form action="tela.html">
            <input class="details-small" type="submit" value="Inicio"></div>
        </form>
        <form action="../index.html">
            <input class="details-small" type="submit" value="Sair"></div>
        </form>
        <form action="reset.html">
            <input class="details-small" type="submit" value="Resetar"></div>
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Cadastros</summary>
        <form action="../../PHP/Professor/fornecedor.php">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form action="../../PHP/Professor/empresa.php">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form action="../../PHP/Professor/cliente.php">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form action="../../PHP/Professor/pedido.php">
                <input class="details-small" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="details-all">
        <summary class="details-big">Produto</summary>
        <form action="../../PHP/Professor/produto.php">
            <input class="details-small" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="quantitativo_recebimento.html">
            <input class="details-small" type="submit" value="Quantitativo"></div>
        </form>
        <form action="nota_recebimento.html">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="quantitativo_expedicao.html">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form action="nota_recebimento.html">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class="caixa">
    </div>
    <div class="menu">Menu</div>
    <div id="tipo">Conta: Professor</div>
</body>

</html>