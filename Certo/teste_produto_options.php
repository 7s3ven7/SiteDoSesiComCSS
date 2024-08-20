<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>

<body>

    <div class=""></div>
    <details class="">
        <summary class="">Menus</summary>
        <form action="../../HTML/Professor/tela.html">
            <input class="" type="submit" value="Inicio"></div>
        </form>
        <form action="../../HTML/index.html">
            <input class="" type="submit" value="Sair"></div>
        </form>
        <form action="../../HTML/Professor/reset.html">
            <input class="" type="submit" value="Resetar"></div>
        </form>
    </details>
    <details class="">
        <summary class="">Cadastros</summary>
        <form action="fornecedor.php">
            <input class="" type="submit" value="Fornecedor"></div>
        </form>
        <form action="empresa.php">
            <input class="" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="">Cliente</summary>
            <form action="cliente.php">
                <input class="" type="submit" value="Cadastro"></div>
            </form>
            <form action="pedido.php">
                <input class="" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="">
        <summary class="">Produto</summary>
        <form action="produto.php">
            <input class="" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="">
        <summary class="">Recebimento</summary>
        <form action="../../HTML/Professor/quantitativo_recebimento.html">
            <input class="" type="submit" value="Quantitativo"></div>
        </form>
        <form action="../../HTML/Professor/nota_recebimento.html">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="">
        <summary class="">Expedição</summary>
        <form action="../../HTML/Professor/quantitativo_expedicao.html">
            <input class="" type="submit" value="Quantitativo">
        </form>
        <form action="../../HTML/Professor/nota_recebimento.html">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class=""></div>

    <div class="">
    </div>
    <div class="">
        <form method="POST" action="produto2.php">
            <div class="">Quantos produtos você irá registrar: <input class="" type="number" name="vezes"
                    placeholder="Número de vezes*"></div>
            <input class="" type="submit">
        </form>
        <?php
        if(isset($_POST['vezes'])){        
    $hostname = "127.0.0.1";
    $name = "u935055604_wesley";
    $password = "XwZX1383";
    $DB = "u935055604_dados";
        
        $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
        
        if ($conexao->connect_errno) {
            echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
            exit();
        }else{
                $i = $_POST['vezes'];
                $sql_list = 'SELECT `nome` FROM `fornecedor`_p;';
                $resultado = $conexao ->query($sql_list);
                echo '<select id="">';
                if(mysqli_num_rows($resultado) > 0){
                    while($row = mysqli_fetch_array($resultado)){
                        $valor = $row['1'];
                        echo '<option value="'.$valor.'">'.$valor.'</option>';
                    }}
                    echo '</select>';
                    if($i <= 0){
                        echo '
                        <br><br>
                        <div class="">Digite um número superior!</div>';
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
            <div class="">'.$numero.'° Produto</div>
            <br>
            <table class="">
                <tr>
                    <td class="">Código do fornecedor: </td>
                    <td><input class="" type="text" name="'.$v1.'" placeholder="1" for="fornecedor"></td>
                    <td class="">Tipo: </td>
                    <td><input class="" type="text" name="'.$v2.'" placeholder="caixa"></td>
                    <td class="">Validade: </td>
                    <td><input class="" type="date" name="'.$v3.'"></td>
                </tr>
                <tr>
                    <td class="">Lote: </td>
                    <td><input class="" type="text" name="'.$v4.'" placeholder="1"></td>
                    <td class="">Nome: </td>
                    <td><input class="" type="text" name="'.$v5.'" placeholder="empresa"></td>
                    <td class="">Marca do produto: </td>
                    <td><input class="" type="text" name="'.$v6.'" placeholder="marca"></td>
                </tr>
                <tr>
                    <td class="">Número do pedido: </td>
                    <td><input class="" type="text" name="'.$v7.'" placeholder="1"></td>
                    <td class="">Unidade: </td>
                    <td><input class="" type="text" name="'.$v8.'" placeholder="1"></td>
                    <td class="">Quantidade de unidade: </td>
                    <td><input class="" type="text" name="'.$v9.'" placeholder="1"></td>
                </tr>
                <tr>
                    <td class="">Quantidade de produto: </td>
                    <td><input class="" type="text" name="'.$v10.'" placeholder="1"></td>
                    <td class="">Valor da unidade: </td>
                    <td><input class="" type="text" name="'.$v11.'" placeholder="1"></td>
                    <td class="">Peso em kilo grama: </td>
                    <td><input class="" type="text" name="'.$v12.'" placeholder="1"></td>
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
                echo '<table class="">';
                echo '<input class="" type="submit">';
                echo'<div class=""></div>';}}
                echo'</form>';}
            ?>
    </div>
    <div class="">Menu</div>
    <div id="">Conta: Professor</div>

</body>

</html>