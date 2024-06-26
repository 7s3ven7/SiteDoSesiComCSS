<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetar</title>
</head>
<?php
    $nome_atividade = $_GET['nome_atividade'];
?>

<body>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form method="POST" action="t_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Inicio"></div>
        </form>
        <form method="POST" action="index.php">
            <input class="details-small" type="submit" value="Sair"></div>
        </form>
        <form method="POST" action="t_reset_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Resetar"></div>
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Cadastros</summary>
        <form method="POST" action="t_fornecedor_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form method="POST" action="t_empresa_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form method="POST" action="t_cliente_p.php?nome_atividade=<?php echo $nome_atividade;?>">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form method="POST" action="t_p.php?nome_atividade=<?php echo $nome_atividade;?>">
                <input class="details-small" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="details-all">
        <summary class="details-big">Produto</summary>
        <form method="POST" action="t_produto_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form method="POST" action="t_quantitativo_r_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo"></div>
        </form>
        <form method="POST" action="t_nota_r_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form method="POST" action="t_quantitativo_e_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form method="POST" action="t_nota_e_pr.php?nome_atividade=<?php echo $nome_atividade;?>">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class="details-caixa"></div>
    <div class="menu">Menu</div>
    <div class="caixa">
        <form method="POST" action="c_reset_p.php">
            <div class="caixa-texto-secreto"></div>
            <div class="texto-secreto">Tens certeza de tua ação?</div>
            <div class="texto-secreto">Você irá extinguir teus dados!</div>
            <input class="senha-secreta" type="password" name="senha_secreta" placeholder="Senha*">
            <br>
            <input class="submit-secreto" type="submit" value="Excluir BD">
        </form>
    </div>

    <div id="tipo">Conta: Professor</div>
</body>

</html>