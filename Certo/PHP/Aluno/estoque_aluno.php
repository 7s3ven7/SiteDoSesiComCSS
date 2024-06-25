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
        <form action="tela.html">
            <input class="details-small" type="submit" value="Inicio">
        </form>
        <form action="../index.html">
            <input class="details-small" type="submit" value="Sair">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="nota_receb.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="qualitativo.html">
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
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="nota_exped.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="tela.html">
            <input class="details-small" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="tela.html">
            <input class="details-small" type="submit" value="Quantitativo (WIP)">
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
	$sql="SELECT produto.tipo,produto.validade,produto.lote,produto.nome,produto.marca,produto.und,produto.quantidade_und,produto.quant_prod,produto.valor_und,produto.Kg,estoque.hangar,estoque.rua,estoque.coluna,estoque.andar,estoque.ap FROM produto_p produto
    JOIN estoque_a estoque ON produto.id = estoque.cod;";
	$resultado = $conexao->query($sql);
    if($resultado->num_rows != 0){
        echo '
        ';
        while($row = mysqli_fetch_array($resultado)){
            $s1 = $row['0'];//Tipo do produto
            $s2 = $row['1'];//Validade
            $s3 = $row['2'];//Lote
            $s4 = $row['3'];//Nome do produto
            $s5 = $row['4'];//Marca do produto
            $s6 = $row['5'];//Unidade
            $s7 = $row['6'];//Quantidade
            $s8 = $row['7'];//Quantidade unidade
            $s9 = $row['8'];//Valor unitário
            $s10 = $row['9'];//Peso
            $s11 = $row['10'];//Hangar
            $s12 = $row['11'];//Rua
            $s13 = $row['12'];//Coluna
            $s14 = $row['13'];//Andar
            $s15 = $row['14'];//Ap
            echo '
            <table>
                <tr>
                    <td>Nome do produto
                    <input class="" type="text" value="'.$s4.'" disabled></td>
                    <td>Tipo do produto
                    <input class="" type="text" value="'.$s1.'" disabled></td>
                    <td>Validade
                    <input class="" type="text" value="'.$s2.'" disabled></td>
                    <td>Lote
                    <input class="" type="text" value="'.$s3.'" disabled></td>
                    <td>Marca do Produto
                    <input class="" type="text" value="'.$s5.'" disabled></td>
                    <td>Peso
                    <input class="" type="text" value="'.$s10.'" disabled></td>
                </tr>
                <tr>
                    <td>Unidade
                    <input class="" type="text" value="'.$s6.'" name="qtd" disabled></td>
                    <td>Quantidade
                    <input class="" type="text" value="'.$s7.'" name="qtd" disabled></td>
                    <td>R$/unit
                    <input class="" type="text" value="'.$s9.'" name="unit" disabled></td>
                    <td>R$/Total
                    <input class="" type="text" value="'.$s9*$s7.'" name="total" disabled></td>
                </tr>
                <tr>
                    <td>Hangar
                    <input class="" type="text" value="'.$s11.'" name="" disabled></td>
                    <td>Rua
                    <input class="" type="text" value="'.$s12.'" name="" disabled></td>
                    <td>Coluna
                    <input class="" type="text" value="'.$s13.'" name="" disabled></td>
                    <td>Andar
                    <input class="" type="text" value="'.$s14.'" name="" disabled></td>
                    <td>Apartamento
                    <input class="" type="text" value="'.$s15.'" name="" disabled></td>
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