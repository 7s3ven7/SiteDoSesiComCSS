<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro nota de recebimento</title>
</head>
<?php
    $nome_atividade = $_GET['nome_atividade'];
    $nome = $_GET['nome'];
?>

<body>
    <div class=""></div>
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
        <div id="">
            <img src="../../img/logo.png" width="250px" height="200px">
        </div>
        <div id="">
            <div class="">Número da Danfe</div>
            <input class="" type="text" name="danfe">
        </div>
        <div id="">
            <div class="">Número Nota</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CNPJ Empresa</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CEP do Empresa</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Data de emissão</div>
            <input class="" type="date" name="nota">
        </div>
        <div id="">
            <div class="">Hora da emissão</div>
            <input class="" type="time" name="nota">
        </div>
        <div id="">
            <div class="">Nome Empresa</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Telefone Empresa</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Código</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Descrição do Produto</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Lote</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">NCM</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CST</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CFOP</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Unidade</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Quantidade</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Valor unitário</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Valor total</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Nome Remetente</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Telefone Remetente</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CNPJ Remetente</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">Professor - <?php echo $nome;?></div>
</body>

</html>