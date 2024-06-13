<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
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
        <form action="produto.php">
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
    <div class="caixa">
    </div>
    <div class="caixa-fixa">
        <?php
            if(isset($_POST['vezes'])){
                $hostname = "127.0.0.1";
                $name = "root";
                $password = "root";
                $DB = "dados";
                
                $conexao = new mysqli($hostname, $name, $password, $DB);
                if ($conexao->connect_errno) {
                    echo "Failed connection: " . $conexao->connect_error;
                    header("Location: ../../HTML/Aluno/recebimento.html");
                    exit();
                } else {
                    $i = $_POST['vezes'];
                    for($i;$i>0;$i){
                    $i = $i-1;
                    echo'
            <hr>
            <br>
            <table class="tabela">
                <tr>
                    <td>Código do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="1" placeholder="1234"></td>
                    <td>Tipo: </td>
                    <td><input class="botao-tabela" type="text" name="2" placeholder="Aplle"></td>
                    <td>Validade: </td>
                    <td><input class="botao-tabela" type="date" name="3" placeholder="12.345.678/0001-00"></td>
                </tr>
                <tr>
                    <td>Lote: </td>
                    <td><input class="botao-tabela" type="text" name="4" placeholder="SENU-123456-2"></td>
                    <td>Nome: </td>
                    <td><input class="botao-tabela" type="text" name="5" placeholder="Titanaique"></td>
                    <td>Marca do produto: </td>
                    <td><input class="botao-tabela" type="text" name="6" placeholder="Aplle"></td>
                </tr>
                <tr>
                    <td>Embalagem: </td>
                    <td><input class="botao-tabela" type="text" name="7" placeholder="2201"></td>
                    <td>Unidade: </td>
                    <td><input class="botao-tabela" type="text" name="8" placeholder="Lacre"></td>
                    <td>Quantidade de unidade: </td>
                    <td><input class="botao-tabela" type="text" name="9" placeholder="SIF"></td>
                </tr>
                <tr>
                    <td>Quantidade de produto: </td>
                    <td><input class="botao-tabela" type="text" name="10" placeholder="Temperatura"></td>
                    <td>Valor da unidade: </td>
                    <td><input class="botao-tabela" type="text" name="11" placeholder="IMO"></td>
                    <td>Peso em kilo grama: </td>
                    <td><input class="botao-tabela" type="text" name="13" placeholder="Nome produto"></td>
                </tr>
            </table>';
                    }}}
            ?>
    </div>

    <div id="tipo">Conta: Professor</div>
    <div class="fundo-2">
        <form method="POST" action="produto.php">
            <div>Digite um número: </div>
            <input type="number" name="vezes" placeholder="Digite um número">
            <input type="submit">
        </form>
    </div>
</body>

</html>