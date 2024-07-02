<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
    $nome = $_GET['nome'];
    $nome_atividade = $_GET['nome_atividade'];
?>

<body>
    <div id="">Aluno</div>
    <div class=""></div>
    <details class="">
        <summary class="">Recebimento</summary>
        <form action="t_nota_r_a.php">
            <input class="" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_r_a.php">
            <input class="" type="submit" value="Qualitativo">
        </form>
        <form action="t_quantitativo_a.php">
            <input class="" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="">
        <summary class="">Controle</summary>
        <form action="t_docas_r_a.php">
            <input class="" type="submit" value="Controle">
        </form>
    </details>
    <details class="">
        <summary class="">Estoque</summary>
        <form action="t_estoque_a.php">
            <input class="" type="submit" value="Estoque">
        </form>
    </details>
    <details class="">
        <summary class="">Picking</summary>
        <form action="t_picking_a.php">
            <input class="" type="submit" value="WIP">
        </form>
    </details>
    <details class="">
        <summary class="">Expedição</summary>
        <form action="t_nota_e_a.php">
            <input class="" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_e_a.php">
            <input class="" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="t_quantitativo_e_a.php">
            <input class="" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="">
        <summary class="">Relatórios</summary>
        <form action="t_relatorios_a.php">
            <input class="" type="submit" value="WIP">
        </form>
    </details>
    <div class="">Menu</div>
    <div class="">
    </div>
    <div id="">Aluno - <?php echo $nome;?></div>
</body>

</html>