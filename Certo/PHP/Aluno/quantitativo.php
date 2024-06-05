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
        <form action="../index.html">
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
        <form action="tela.html">
            <input class="details-small" type="submit" value="WIP"></summary>
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
        <form action="tela.html">
            <input class="details-small" type="submit" value="Doca">
        </form>
    </details>
    <div class="menu">Menu</div>
    <div class="caixa">
        <form action="quantitativo.php" method="POST">
            <div class="quadrado-quantitativo">
                <div class="quantitativo-texto">Digite o Código do produto</div>
                <input class="quantitativo-input-pedido" type="number" value="0" name="n_pedido">
                <input class="quantitativo-enviar-pedido" type="submit">

        </form>

        <?php
     if(isset($_POST['n_pedido'])){
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
                $vl = $_POST['n_pedido'];
			$sql="SELECT * FROM `produto_p` WHERE `n_pedido` = ".$vl.";";
			$resultado = $conexao->query($sql);
            if(mysqli_num_rows($resultado)> 0){
                $row = mysqli_fetch_array($resultado);
                $s1 = $row['0'];
                $s8 = $row['7'];
                $s10 = $row['9'];
                $s11 = $row['10'];
                $s12 = $row['11'];
            echo '                <div class="quantitativo-texto">Número da Nota Fiscal</div>
                <input class="quantitativo-input-pedido-nota" type="text" value="'.$s1.'">
            </div>
            <div class="quadrado-quantitativo-2">
                <table class="quantitativo-margin">
                    <tr>
                        <td>
                            <div class="quantitativo-input-valor-texto">UN</div>
                        </td>
                        <td>
                            <div class="quantitativo-input-valor-texto">QTD</div>
                        </td>
                        <td>
                            <div class="quantitativo-input-valor-texto">R$/unit</div>
                        </td>
                        <td>
                            <div class="quantitativo-input-valor-texto">R$Total</div>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="quantitativo-input-valor" type="text" value="'.$s8.'" name="un"></td>
                        <td><input class="quantitativo-input-valor" type="text" value="'.$s10.'" name="qtd"></td>
                        <td><input class="quantitativo-input-valor" type="text" value="'.$s11.'" name="unit"></td>
                        <td><input class="quantitativo-input-valor" type="text" value="'.$s12.'" name="total"></td>
                        <td><input class="quantativo-input-valor-submit" type="checkbox" name="produto"></td>
                    </tr>
                </table>
                <table class="quantitativo-margin-mini">
                    <tr>
                        <td>
                            <div class="quantitativo-input-valor-texto">Faltando</div>
                        </td>
                        <td>
                            <input class="quantativo-input-valor-submit-mini" type="checkbox" name="falta">
                        </td>
                        <td>
                            <div class="quantitativo-input-valor-texto">Avariado</div>
                        </td>
                        <td>
                            <input class="quantativo-input-valor-submit-mini" type="checkbox" name="avariado">
                        </td>
                    </tr>
                </table>
                </div>
        ';
        }else{
        }
    
    }}
        ?>
    </div>