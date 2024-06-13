<?php
session_start();

$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);

if (empty($_SESSION['nome'])){
    header('Location: sair.php');
    exit();
} else {
echo '<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html" ;charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
</head>

<body>
    <div id="tipo">Aluno</div>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form action="../../HTML/Aluno/tela.html">
            <input class="details-small" type="submit" value="Inicio">
        </form>
        <form action="../../HTML/index.html">
            <input class="details-small" type="submit" value="Sair">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="../../PHP/aluno/quantitativo.php">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form action="../../PHP/aluno/qualitativo.php">
            <input class="details-small" type="submit" value="Qualitativo">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Movimentação</summary>
        <form action="../../PHP/aluno/movimentacao.php">
            <input class="details-small" type="submit" value="Movimentação"></summary>
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Estoque</summary>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Picking</summary>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Relatórios</summary>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Controle</summary>
        <form action="../../PHP/aluno/docas_receb.php">
            <input class="details-small" type="submit" value="Doca">
        </form>
    </details>
    <div class="menu">Menu</div>
    <div class="caixa">
    </div>
</body>

</html>';
}

if ($conexao->connect_errno) {
	echo "Failed conection :" . $conexao->connect_error;
	exit();
} else {
    $SQL='SELECT `n_nota`, `doca` FROM `doca_recebimento_a` LIMIT 0, 10';

    $resultado = $conexao->query($SQL);
    if(mysqli_num_rows($resultado)>0)
        while($row = mysqli_fetch_array($resultado)){;
            $s1 = $row['0'];
            $s2 = $row['1'];
            echo '<div class="texto">'.$row['0'].'"</div>"';

        }   
}
?>