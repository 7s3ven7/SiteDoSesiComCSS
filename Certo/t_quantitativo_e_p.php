<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantitativo</title>
</head>

<body>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form action="t_p.php">
            <input class="details-small" type="submit" value="Inicio"></div>
        </form>
        <form action="index.php">
            <input class="details-small" type="submit" value="Sair"></div>
        </form>
        <form action="t_reset_p.php">
            <input class="details-small" type="submit" value="Resetar"></div>
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Cadastros</summary>
        <form action="t_fornecedor_p.php">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form action="t_empresa_p.php">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form action="t_cliente_p.php">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form action="t_p.php">
                <input class="details-small" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="details-all">
        <summary class="details-big">Produto</summary>
        <form action="t_produto_p.php">
            <input class="details-small" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="t_quantitativo_r_p.php">
            <input class="details-small" type="submit" value="Quantitativo"></div>
        </form>
        <form action="t_nota_r_p.php">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="t_quantitativo_e_p.php">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form action="t_nota_r_p.php">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class="details-caixa"></div>
    <div class="menu">Menu</div>
    <div class="caixa">
        <form method="POST" action="../../PHP/Professor/quantitativo_expedicao.php">
            <table class="tabela">
                <tr>
                    <td>Código do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="1" placeholder="1234"></td>
                    <td>Nome da empresa: </td>
                    <td><input class="botao-tabela" type="text" name="2" placeholder="Aplle"></td>
                </tr>
                <tr>
                    <td>Modelo do container: </td>
                    <td><input class="botao-tabela" type="text" name="3" placeholder="SENU-123456-2"></td>
                    <td>Navio: </td>
                    <td><input class="botao-tabela" type="text" name="4" placeholder="Titanaique"></td>
                </tr>
                <tr>
                    <td>Nome do destinatário: </td>
                    <td><input class="botao-tabela" type="text" name="5" placeholder="Aplle"></td>
                    <td>Tipo do container: </td>
                    <td><input class="botao-tabela" type="text" name="6" placeholder="2201"></td>
                </tr>
                <tr>
                    <td>Lacre: </td>
                    <td><input class="botao-tabela" type="text" name="7" placeholder="Lacre"></td>
                    <td>Lacre SIF: </td>
                    <td><input class="botao-tabela" type="text" name="8" placeholder="SIF"></td>
                </tr>
                <tr>
                    <td>Temperatura: </td>
                    <td><input class="botao-tabela" type="text" name="9" placeholder="Temperatura"></td>
                    <td>IMO: </td>
                    <td><input class="botao-tabela" type="text" name="10" placeholder="IMO"></td>
                </tr>
                <tr>
                    <td>Número ONU: </td>
                    <td><input class="botao-tabela" type="text" name="11" placeholder="Número"></td>
                    <td>Lotes: </td>
                    <td><input class="botao-tabela" type="text" name="12" placeholder="A1"></td>
                </tr>
                <tr>
                    <td>CNPJ do destinatário: </td>
                    <td><input class="botao-tabela" type="text" name="13" placeholder="CNPJ"></td>
                </tr>
            </table>
            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>
    <div class="menu">Menu</div>
    <div id="tipo">Conta: Professor</div>
</body>

</html>