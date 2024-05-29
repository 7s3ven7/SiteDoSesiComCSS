<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro nota de recebimento</title>
</head>

<body>
    <div id="caixa">
        <form method="POST" action="../PHP/quantitativo.php">
            <div id="qd-logo">
            </div>
            <div id="qd-vazio-1"></div>
            <div id="qd-danfe">
                <div class="text-nota">Danfe</div>
            </div>
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
    </div>


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