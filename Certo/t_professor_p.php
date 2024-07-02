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
        <form method="POST" action="empresa.php">
            <div class="">WIP: <input class="" type="number" name="vezes" placeholder="Número de vezes*"></div>
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
            $v1 = 'cnpj';
            $v2 = 'nome_empresa';
            $v3 = 'nome_gerente';
            $v4 = 'gmail';
            $v5 = 'cep';
            $v6 = 'telefone';
            echo'<form method="POST" action="cadastro_empresa.php?$l='.$l.'">';
            echo'<br>';
            for($i;$i>0;$i){
                $i -= 1;
                echo'
                <div class="">'.$numero.'° Pedido</div>
                <br>
                <table class="">
                    <tr>
                        <td class="">CNPJ: </td>
                        <td><input class="" type="text" name="'.$v1.'" placeholder="00.000.000/0000-00"></td>
                        <td class="">Nome da produto: </td>
                        <td><input class="" type="text" name="'.$v2.'" placeholder="Nome"></td>
                    <tr>
                        <td class="">Nome do gerente: </td>
                        <td><input class="" type="text" name="'.$v3.'" placeholder="Nome"></td>                
                        <td class="">Gmail: </td>
                        <td><input class="" type="text" name="'.$v4.'" placeholder="exemplo@gmail.com"></td>
                    </tr>
                    <tr>
                        <td class="">CEP: </td>
                        <td><input class="" type="text" name="'.$v5.'" placeholder="0000-000"></td>
                        <td class="">Telefone: </td>
                        <td><input class="" type="text" name="'.$v6.'" placeholder="(00) 00000-0000 "></td>
                    </tr>
                </table>';
                $numero += 1;
                $v1 = $v1.'p';
                $v2 = $v2.'p';
                $v3 = $v3.'p';
                $v4 = $v4.'p';
                $v5 = $v5.'p';
            }              
            echo '<table class="">';
            echo '<input class="" type="submit">';
            echo'<div class=""></div>';
        }
    }
    echo'</form>';
?>
    </div>
    <div id="">Professor - <?php echo $nome;?></div>
</body>

</html>