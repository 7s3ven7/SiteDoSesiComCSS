<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>
<?php
    $nome_atividade = $_GET['nome_atividade'];
    $nome = $_GET['nome'];
?>

<body>
    <div class=""></div>
    <details class="">
        <summary class="">Criações</summary>
        <form method="POST" action="t_turma.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Turmas"></div>
        </form>
        <form method="POST"
            action="t_atividade.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Atividade"></div>
        </form>
    </details>
    <details class="">
        <summary class="">Cadastros</summary>
        <form method="POST"
            action="t_fornecedor_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Fornecedor"></div>
        </form>
        <form method="POST"
            action="t_empresa_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="">Cliente</summary>
            <form method="POST"
                action="t_cliente_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="" type="submit" value="Cadastro"></div>
            </form>
            <form method="POST"
                action="t_pedido_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="">
        <summary class="">Produto</summary>
        <form method="POST"
            action="t_produto_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="">
        <summary class="">Recebimento</summary>
        <form method="POST"
            action="t_quantitativo_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Quantitativo"></div>
        </form>
        <form method="POST"
            action="t_nota_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="">
        <summary class="">Expedição</summary>
        <form method="POST"
            action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Quantitativo">
        </form>
        <form method="POST"
            action="t_nota_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class=""></div>
    <div class="">Menu</div>
    <div class="">
    </div>

    <div class="">
        <form method="POST" action="t_produto_p.php">
            <div class="">Quantos produtos você irá registrar: <input class="botao-produto" type="number" name="vezes"
                    placeholder="Número de vezes*"></div>
            <input class="" type="submit">
        </form>
<?php
    if(isset($_POST['vezes'])){
        $i = $_POST['vezes'];
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
            echo'<form method="POST" action="c_produto_p.php?$l='.$l.'">';
            echo'<br>';
            for($i;$i>0;$i){
                $i -= 1;
                echo'
                <div class="">'.$numero.'° Produto</div>
                <br>
                <table class="">
                    <tr>
                        <td class="">Código do fornecedor: </td>
                        <td><input class="" type="text" name="'.$v1.'" placeholder="1"></td>
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
            echo'<div class=""></div>';
        }
    }
    echo'</form>';
?>
        <html>
<?php
    $hostname = "127.0.0.1";
    $name = "root";
    $password = "root";
    $DB = "dados";

    $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB

    if ($conexao->connect_errno) {
        echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
        exit();
    } else {
        $z = $_GET['$l'];
        $a = 'cod_fone';
        $b = 'tipo';
        $c = 'validade';
        $d = 'lote';
        $e = 'nome';
        $f = 'marca';
        $g = 'numero';
        $h = 'unidade';
        $i = 'quantidade_unidade';
        $j = 'quantidade_produto';
        $k = 'valor_unidade';
        $l = 'peso';
        while($z>0){
            $v1 = $_POST[$a];
            $v2 = $_POST[$b];
            $v3 = $_POST[$c];
            $v4 = $_POST[$d];
            $v5 = $_POST[$e];
            $v6 = $_POST[$f];
            $v7 = $_POST[$g];
            $v8 = $_POST[$h];
            $v9 = $_POST[$i];
            $v10 = $_POST[$j];
            $v11 = $_POST[$k];
            $v12 = $_POST[$l];
            $vtotal = $v11 * ($v9*$v10); //cod inter id atividade
            for($zz = 1;$zz>0;$zz){
                $SQL = 'INSERT INTO `produto_p` (`cod_forne`,`tipo`,`date_v`,`lote`,`nome_p`,`marca_p`,`id_atividade'./*.esse_aqui_tem_problema.*/'`,`und`,`quant_und`,`quant_prod`,`valor_und`,`Kg`,`valor_total'./*.esse_aqui_tem_problema.*/'`) 
                VALUES ("' . $v1 . '","' . $v2 . '","' . $v3 . '","' . $v4 . '","' . $v5 . '","'.$v6.'","' . $v7 . '","' . $v8 . '","' . $v9 . '","' . $v10 . '","' . $v11 . '","'.$v12.'","'.$vtotal.'")';
                $resultado = $conexao->query($SQL);
                $zz -= 1;
            }
        $zz = 1;
        $a = $a.'p';
        $b = $b.'p';
        $c = $c.'p';
        $d = $d.'p';
        $e = $e.'p';
        $f = $f.'p';
        $g = $g.'p';
        $h = $h.'p';
        $i = $i.'p';
        $j = $j.'p';
        $k = $k.'p';
        $l = $l.'p';
        $z -= 1;
        }
        $conexao->close();
        header("Location: t_produto_p.php");
    }
?>

        </html>
    </div>
    <div id="">Professor - <?php echo $nome;?></div>
</body>

</html>