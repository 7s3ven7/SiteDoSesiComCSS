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
        <form action="../../HTML/Professor/tela.html">
            <input class="details-small" type="submit" value="Inicio"></div>
        </form>
        <form action="../../HTML/index.html">
            <input class="details-small" type="submit" value="Sair"></div>
        </form>
        <form action="../../HTML/Professor/reset.html">
            <input class="details-small" type="submit" value="Resetar"></div>
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Cadastros</summary>
        <form action="../../HTML/Professor/fornecedor.html">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form action="../../HTML/Professor/empresa.html">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form action="../../HTML/Professor/cliente.html">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form action="../../HTML/Professor/pedido.html">
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
        <form action="../../HTML/Professor/quantitativo_recebimento.html">
            <input class="details-small" type="submit" value="Quantitativo"></div>
        </form>
        <form action="../../HTML/Professor/nota_recebimento.html">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="../../HTML/Professor/quantitativo_expedicao.html">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form action="../../HTML/Professor/nota_recebimento.html">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class="details-caixa"></div>

    <div class="caixa">
    </div>
    <div class="caixa-fixa">
        <form method="POST" action="produto.php">
            <div class="texto-produto">Quantos produtos você irá registrar: <input class="botao-produto" type="number"
                    name="vezes" placeholder="Número de vezes*"></div>
            <input class="enviar-numero-produto" type="submit">
        </form>
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
                    $l = $i;
                    $numero = 1;
                    $v1 = 'cod_fone';
                    $v2 = 'tipo';
                    $v3 = 'validade';
                    $v4 = 'lote';
                    $v5 = 'nome';
                    $v6 = 'marca';
                    $v7 = 'numero';
                    $v8 = 'unidade';
                    $v9 = 'quantidade_unidade';
                    $v10 = 'quantidade_produto';
                    $v11 = 'valor_unidade';
                    $v12 = 'peso';
                echo'<form method="POST" action="cadastro_produto.php?$l='.$l.'">';
                    for($i;$i>0;$i){
                    $i -= 1;
                    echo'
            <br>
            <div class="numero-produto">Produto Número: '.$numero.'</div>
            <br>
            <table class="tabela">
                <tr>
                    <td>Código do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v1.'" placeholder="1234"></td>
                    <td>Tipo: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v2.'" placeholder="caixa"></td>
                    <td>Validade: </td>
                    <td><input class="botao-tabela" type="date" name="'.$v3.'"></td>
                </tr>
                <tr>
                    <td>Lote: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v4.'" placeholder="SENU-123456-2"></td>
                    <td>Nome: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v5.'" placeholder="Titanaique"></td>
                    <td>Marca do produto: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v6.'" placeholder="Aplle"></td>
                </tr>
                <tr>
                    <td>Número do pedido: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v7.'" placeholder="2201"></td>
                    <td>Unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v8.'" placeholder="Lacre"></td>
                    <td>Quantidade de unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v9.'" placeholder="SIF"></td>
                </tr>
                <tr>
                    <td>Quantidade de produto: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v10.'" placeholder="Temperatura"></td>
                    <td>Valor da unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v11.'" placeholder="IMO"></td>
                    <td>Peso em kilo grama: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v12.'" placeholder="Nome produto"></td>
                </tr>
            </table>';
            $numero += 1;
            $v1 = $v1.'p';
            $v2 = $v2.'p';
            $v3 = $v3.'p';
            $v4 = $v4.'p';
            $v5 = $v5.'p';
            $v6 = $v6.'p';
            $v7 = $v7.'p';
            $v8 = $v8.'p';
            $v9 = $v9.'p';
            $v10 = $v10.'p';
            $v11 = $v11.'p';
            $v12 = $v12.'p';
                    }              
                echo '<table class="table">';
                echo '<input class="botao" type="submit">';
                echo'<div class="details-caixa-2"></div>';}}
                echo'</form>';
            ?>
    </div>
    <div class="menu">Menu</div>
    <div id="tipo">Conta: Professor</div>

</body>

</html>