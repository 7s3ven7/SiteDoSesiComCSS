<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro pedido</title>
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
        <div class="texto-titulo">Cadastre teus pedidos</div>
        <form method="POST" action="../../PHP/Professor/pedido.php">
            <table class="tabela-mini">
                <tr>
                    <td class="texto-tabela-mini">CNPJ:</td>
                    <td>
                        <input class="botao-tabela-2" type="text" placeholder="000.000.000.0000-00" name="1">
                    </td>
                    <td class="texto-tabela-mini">Nome do produto:</td>
                    <td>
                        <input class="botao-tabela-2" type="text" placeholder="Nome" name="2">
                    </td>
                </tr>
                <tr>
                    <td class="texto-tabela-mini">Unidade:</td>
                    <td>
                        <input class="botao-tabela-2" type="text" placeholder="0" name="3">
                    </td>

                    <td class="texto-tabela-mini">Qnt. de unidade:</td>
                    <td>
                        <input class="botao-tabela-2" type="number" placeholder="0" name="4">
                    </td>
                </tr>
                <tr>
                    <td class="texto-tabela-mini">Qnt. de produto:</td>
                    <td>
                        <input class="botao-tabela-2" type="number" placeholder="0" name="5">
                    </td>
                    <td class="texto-tabela-mini">Valor da unidade:</td>
                    <td>
                        <input class="botao-tabela-2" type="number" placeholder="o" name="6">
                    </td>
                </tr>
                <tr>
                    <td class="texto-tabela-mini">Sinopse:</td>
                    <td colspan="3"><input class="botao-tabela-sinopse" type="text" placeholder="Sinopse"
                            name="sinopse">
                    </td>
                </tr>
            </table>
            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>
    <div class="menu">Menu</div>
    <div id="tipo">Conta: Professor</div>
</body>

</html>