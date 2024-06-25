<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do fornecedor</title>
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
        <div class="texto-titulo">Cadastre teus fornecedores</div>
        <form method="POST" action="../../PHP/Professor/fornecedor.php">
            <table class="tabela-mini">
                <tr>
                    <td class="texto-tabela-medium">CNPJ: </td>
                    <td><input class="botao-tabela" type="text" name="1" placeholder="000.000.000.0000-00"></td>
                </tr>
                <tr>
                    <td class="texto-tabela-medium">Nome do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="2" placeholder="Nome"></td>
                </tr>
                <tr>
                    <td class="texto-tabela-medium">Gmail: </td>
                    <td><input class="botao-tabela" type="text" name="3" placeholder="exemplo@gmail.com"></td>
                </tr>
                <tr>
                    <td class="texto-tabela-medium">CEP: </td>
                    <td><input class="botao-tabela" type="text" name="4" placeholder="000-000-000"></td>
                </tr>
                <tr>
                    <td class="texto-tabela-medium">Telefone: </td>
                    <td><input class="botao-tabela" type="text" name="5" placeholder="(00) 00000-0000"></td>
                </tr>
            </table>
            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>
    <div class="menu">Menu</div>
    <div id="tipo">Conta: Professor</div>
</body>

</html>