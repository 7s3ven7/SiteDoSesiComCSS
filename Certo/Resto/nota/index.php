<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro nota de recebimento</title>
</head>

<body>
    <div id="tipo">Conta: Professor</div>
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
        <form action="fornecedor.html">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form action="empresa.html">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form action="cliente.html">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form action="pedido.html">
                <input class="details-small" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="details-all">
        <summary class="details-big">Produto</summary>
        <form action="produto.html">
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

    <div class="menu">Menu</div>
    <form method="POST" action="../PHP/quantitativo.php">
        <div id="qd-logo">
        </div>
        <div id="qd-vazio-1">Espaço vazio</div>
        <div id="qd-danfe">Danfe</div>
        <div id="qd-nota-fiscal">Nota Fiscal</div>
        <!--Proxima linha-->
        <div id="qd-nome-do-emitente">NOME_DO_EMITENTE</div>
        <input>
        <div id="qd-cnpj">CNPJ</div>
        <input>
        <div id="qd-fone-emitente">FONE_EMITENTE</div>
        <div id="qd-cep-emitente">CEP_EMITENTE</div>
        <input>
        <div id="qd-data-de-emissao">DATA_DE_EMISSÃO</div>
        <input>



        <div id="qd1">
            <div class="texto-nota-medium">NOME_DO_EMITENTE</div>
            <input class="input-nota" type="text" name="cnpj">
        </div>
        <div id="qd2">
            <div class="texto-nota-medium">CNPJ</div>
            <input class="input-nota" type="text" name="municipio">
        </div>
        <div id="qd3">
            <div class="texto-nota-small">DATA_DE_EMISSÃO</div>
            <input class="input-nota" type="date" name="municipio">
        </div>
        <div id="qd4">
            <div class="texto-nota-medium">ENDEREÇO NÚMERO</div>
            <input class="input-nota" type="text" name="cep">
            <input class="input-nota-mini-mini" type="number" name="num">
        </div>
        <div id="qd5">
            <div class="texto-nota-medium">BAIRRO/DISTRITO</div>
            <input class="input-nota" type="text" name="cep">
        </div>
        <div id="qd6">
            <div class="texto-nota-medium">CEP</div>
            <input class="input-nota" type="text" name="cep">
        </div>
        <div id="qd7">
            <div class="texto-nota-small">DATA_DE_ENTRADA/SAIDA</div>
            <input class="input-nota" type="date" name="municipio">
        </div>
    </form>
    </div>
</body>

</html>

<!--colspan e rowspan html-->