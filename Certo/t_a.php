<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
    $nome = $_GET['nome'];
    $nome_atividade = $_GET['nome_atividade'];
?>

<body>
    <div id="tipo">Aluno</div>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="t_nota_r_a.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_r_a.php">
            <input class="details-small" type="submit" value="Qualitativo">
        </form>
        <form action="t_quantitativo_a.php">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Controle</summary>
        <form action="t_docas_r_a.php">
            <input class="details-small" type="submit" value="Controle">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Estoque</summary>
        <form action="t_estoque_a.php">
            <input class="details-small" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Picking</summary>
        <form action="t_picking_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="t_nota_e_a.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_e_a.php">
            <input class="details-small" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="t_quantitativo_e_a.php">
            <input class="details-small" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Relatórios</summary>
        <form action="t_relatorios_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <div class="menu">Menu</div>
    <div class="caixa">
    </div>
    <div id="tipo">Aluno - <?php echo $nome;?></div>
</body>

</html>