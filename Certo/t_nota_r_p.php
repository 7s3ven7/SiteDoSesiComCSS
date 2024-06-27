<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
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
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form method="POST" action="t_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Inicio"></div>
        </form>
        <form method="POST" action="index.php">
            <input class="details-small" type="submit" value="Sair"></div>
        </form>
        <form method="POST"
            action="t_reset_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Resetar"></div>
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Cadastros</summary>
        <form method="POST"
            action="t_fornecedor_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form method="POST"
            action="t_empresa_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form method="POST"
                action="t_cliente_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form method="POST" action="t_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="details-small" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="details-all">
        <summary class="details-big">Produto</summary>
        <form method="POST"
            action="t_produto_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form method="POST"
            action="t_quantitativo_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo"></div>
        </form>
        <form method="POST"
            action="t_nota_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form method="POST"
            action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form method="POST"
            action="t_nota_e_pr.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form action="t_nota_e_pr.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class="details-caixa"></div>
    <div class="menu">Menu</div>
    <div class="caixa">
        <div id="qd-logo">
            <img src="../../img/logo.png" width="250px" height="200px">
        </div>
        <div id="qd-danfe">
            <div class="text-nota">Número da Danfe</div>
            <input class="input-nota" type="text" name="danfe">
        </div>
        <div id="qd-nota-fiscal">
            <div class="text-nota">Número Nota</div>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-cnpj">
            <div class="text-nota">CNPJ Empresa</div>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-cep-emitente">
            <div class="text-nota">CEP do Empresa</div>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-data-de-emissao">
            <div class="text-nota">Data de emissão</div>
            <input class="input-nota" type="date" name="nota">
        </div>
        <div id="qd-horario-de-emissao">
            <div class="text-nota">Hora da emissão</div>
            <input class="input-nota" type="time" name="nota">
        </div>
        <div id="qd-nome-do-emitente">
            <div class="text-nota">Nome Empresa</div>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-fone-emitente">
            <div class="text-nota">Telefone Empresa</div>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-cod">
            <div class="text-nota">Código</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-desc-produto">
            <div class="text-nota">Descrição do Produto</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-lote">
            <div class="text-nota">Lote</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-NCM">
            <div class="text-nota">NCM</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-CST">
            <div class="text-nota">CST</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-CFOP">
            <div class="text-nota">CFOP</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-UN">
            <div class="text-nota">Unidade</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-quantidade">
            <div class="text-nota">Quantidade</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-valor_unit">
            <div class="text-nota">Valor unitário</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-valor_total">
            <div class="text-nota">Valor total</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-nome_remetente">
            <div class="text-nota">Nome Remetente</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-fone_remetente">
            <div class="text-nota">Telefone Remetente</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="qd-CNPJ_remetente">
            <div class="text-nota">CNPJ Remetente</div>
            <hr>
            <input class="input-nota" type="text" name="nota">
        </div>
        <div id="tipo">Professor - <?php echo $nome;?></div>
</body>

</html>