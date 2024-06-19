<!DOCTYPE html>

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
        <form action="../../HTML/aluno/tela.html">
            <input class="details-small" type="submit" value="Inicio">
        </form>
        <form action="../../HTML/index.html">
            <input class="details-small" type="submit" value="Sair">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="nota_receb.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="../../HTML/aluno/qualitativo.html">
            <input class="details-small" type="submit" value="Qualitativo">
        </form>
        <form action="quantitativo.php">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Controle</summary>
        <form action="docas_receb.php">
            <input class="details-small" type="submit" value="Controle">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Estoque</summary>
        <form action="estoque.php">
            <input class="details-small" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Picking</summary>
        <form action="../../HTML/aluno/tela.html">
            <input class="details-small" type="submit" value="Picking">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="nota_exped.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="../../HTML/aluno/tela.html">
            <input class="details-small" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="../../HTML/aluno/tela.html">
            <input class="details-small" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Relatórios</summary>
        <form action="../../HTML/aluno/tela.html">
            <input class="details-small" type="submit" value="Relatórios">
        </form>
    </details>
    <div class="menu">Menu</div>
    <div class="caixa">

        <?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";
        
$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
if ($conexao->connect_errno) {
    echo "Failed connection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    header("Location: ../../HTML/Aluno/recebimento.html");
    exit();
} else {
	$sql="SELECT * FROM `produto_p`;";
	$resultado = $conexao->query($sql);

    if($resultado->num_rows != 0){
        echo '
        ';
        while($row = mysqli_fetch_array($resultado)){
            $s1 = $row['0'];
            $s2 = $row['1'];
            $s3 = $row['2'];
            $s4 = $row['3'];
            $s5 = $row['4'];
            $s6 = $row['5'];
            $s7 = $row['6'];
            $s8 = $row['7'];
            $s9 = $row['8'];
            $s10 = $row['9'];
            $s11 = $row['10'];
            $s12 = $row['11'];
            echo '
            <table>
                <tr>
                    <td>Nome do produto
                    <input class="" type="text" value="'.$s5.'" disabled></td>
                    <td>Tipo do produto
                    <input class="" type="text" value="'.$s2.'" disabled></td>
                    <td>Validade
                    <input class="" type="text" value="'.$s1.'" disabled></td>
                    <td>Lote
                    <input class="" type="text" value="'.$s1.'" disabled></td>
                    <td>Marca do Produto
                    <input class="" type="text" value="'.$s1.'" disabled></td>
                    <td>Peso
                    <input class="" type="text" value="'.$s1.'" disabled></td>
                </tr>
                <tr>
                    <td>
                        UN
                    </td>
                    <td>
                        QTD
                    </td>
                    <td>
                        R$/unit
                    </td>
                    <td>
                        R$Total
                    </td>
                </tr>
                <tr>
                    <td><input class="" type="text" value="'.$s8.'" name="un" disabled></td>
                    <td><input class="" type="text" value="'.$s10.'" name="qtd" disabled></td>
                    <td><input class="" type="text" value="'.$s11.'" name="unit" disabled></td>
                    <td><input class="" type="text" value="'.$s12.'" name="total" disabled></td>
                </tr>
            </table>
            <hr>
            ';
        }
    }
}
        ?>
    </div>
    </div>