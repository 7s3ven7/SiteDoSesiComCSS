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
        <form action="fornecedor.php">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form action="empresa.php">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form action="cliente.php">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form action="pedido.php">
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
        <form method="POST" action="produto2.php">
            <div class="texto-produto">Quantos produtos você irá registrar: <input class="botao-produto" type="number"
                    name="vezes" placeholder="Número de vezes*"></div>
            <input class="enviar-numero-produto" type="submit">
        </form>
        <?php
            if(isset($_POST['vezes'])){
                    $i = $_POST['vezes'];
                $sql_list = "SELECT `nome` FROM `fornecedor;";
                echo '<select id="fornecedores">';
                if(mysqli_num_rows($sql_list) > 0){
                    while($row = mysqli_fetch_array($sql_list)){
                        $valor = $row[1];
                        echo '<option value="'.$valor.'">'.$valor.'</option>';
                    }}
                    echo '</select>';
                    if($i <= 0){
                        echo '
                        <br><br>
                        <div class="texto-produto">Digite um número superior!</div>';
                    }else{
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
                echo'<br>';

                    for($i;$i>0;$i){
                    $i -= 1;
                    echo'
            <div class="numero-produto">'.$numero.'° Produto</div>
            <br>
            <table class="tabela-mini">
                <tr>
                    <td class="texto-tabela-mini">Código do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v1.'" placeholder="1"></td>
                    <td class="texto-tabela-mini">Tipo: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v2.'" placeholder="caixa"></td>
                    <td class="texto-tabela-mini">Validade: </td>
                    <td><input class="botao-tabela" type="date" name="'.$v3.'"></td>
                </tr>
                <tr>
                    <td class="texto-tabela-mini">Lote: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v4.'" placeholder="1"></td>
                    <td class="texto-tabela-mini">Nome: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v5.'" placeholder="empresa"></td>
                    <td class="texto-tabela-mini">Marca do produto: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v6.'" placeholder="marca"></td>
                </tr>
                <tr>
                    <td class="texto-tabela-mini">Número do pedido: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v7.'" placeholder="1"></td>
                    <td class="texto-tabela-mini">Unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v8.'" placeholder="1"></td>
                    <td class="texto-tabela-mini">Quantidade de unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v9.'" placeholder="1"></td>
                </tr>
                <tr>
                    <td class="texto-tabela-mini">Quantidade de produto: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v10.'" placeholder="1"></td>
                    <td class="texto-tabela-mini">Valor da unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v11.'" placeholder="1"></td>
                    <td class="texto-tabela-mini">Peso em kilo grama: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v12.'" placeholder="1"></td>
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