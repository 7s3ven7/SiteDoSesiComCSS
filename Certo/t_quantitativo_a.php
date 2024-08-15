
<!DOCTYPE html>
<?php
session_start();
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
    if ($conexao->connect_errno) {
        echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
        exit();
    } else{
        $nome = $_GET['nome'];
        function redirect(){
            global $nome;
            if(isset($_GET['nome_atividade'])){
                $nome_atividade = $_GET['nome_atividade'];
                echo $nome.'&nome_atividade='.$nome_atividade;
            }else{
                echo $nome;
            }
        }}?>
<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="caixa-menu-geral"></div>
    <div class="menu">Menu</div>
    <div class="conta-geral">Aluno - <?php echo $nome;?></div>
    <div class='espaco'></div>
    <details class='details'>
        <summary class="sumario">Recebimento</summary>
        <form method="POST" action="t_nota_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo">
        </form>
        <form method="POST" action="t_quantitativo_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Controle</summary>
        <form method="POST" action="t_docas_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Controle">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Estoque</summary>
        <form method="POST" action="t_estoque_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Picking</summary>
        <form method="POST" action="t_picking_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Expedição</summary>
        <form method="POST" action="t_nota_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo (WIP)">
        </form>
        <form method="POST" action="t_quantitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Relatórios</summary>
        <form method="POST" action="t_relatorios_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>

    <div class="caixa-tela-informacao-geral">
        <form action="t_quantitativo_a.php" method="POST">
            <div class="caixa-quant-1-r-a">
                <div class="texto-medio-quant-r-a">Digite o Código do fornecedor</div>
                <input class="botao-input-quant-r-a" type="number" name="cod_forne">
                <input class="botao-submit-quant-r-a" type="submit">
            </div>
        </form>
        <div class="caixa-quant-r-a">
        <table>
        <form action="t_quantitativo_a.php" method="POST">
        <?php
    if(isset($_POST['cod_forne'])){
        $hostname = "127.0.0.1";
        $name = "root";
        $password = "root";
        $DB = "dados";

        $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
        if ($conexao->connect_errno) {
            echo "Failed connection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
            header("Location: t_quantitativo_a.php");
            exit();
        } else {
            $v1 = $_POST['cod_forne'];
            $sql="SELECT * FROM `produto_p` WHERE `cod_forne` = '".$v1."';";
            $resultado = $conexao->query($sql);
            $rep = -1;
        if(isset($_POST['cod_forne'])){
        if(mysqli_num_rows($resultado) > 0){
            while($row = mysqli_fetch_array($resultado)){
                $rep = $rep + 1;
                if ($rep / 4 == 1){
                $rep=0;
                echo '<tr>';
                }
                $s1 = $row['0'];
                $s2 = $row['7'];
                $s3 = $row['2'];
                $s4 = $row['3'];
                $s5 = $row['8'];
                $s6 = $s5*$s4;
                echo '
                <td>
                <div class="caixa-quant-2-r-a">
                    <div class="texto-medio-quant-r-a">Número da Nota Fiscal</div>
                    <input class="botao-input-quant-2-r-a" type="text" value="'.$s1.'" disabled>
                    <div class="texto-medio-quant-r-a">Nome do produto</div>
                    <input class="botao-input-quant-2-r-a" type="text" value="'.$s2.'" disabled>
                </div>
                <div class="caixa-quant-3-r-a">
                    <table>
                        <tr>
                            <td>
                                <div class="texto-medio-quant-r-a">UN</div>
                            </td>
                            <td>
                                <input class="botao-input-quant-3-r-a" type="text" value="'.$s3.'" name="un">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="texto-medio-quant-r-a">QTD</div>
                            </td>
                            <td><input class="botao-input-quant-3-r-a" type="text" value="'.$s4.'" name="qtd"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="texto-medio-quant-r-a">R$/unit</div>
                            </td>
                            <td><input class="botao-input-quant-3-r-a" type="text" value="'.$s5.'" name="unit"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="texto-medio-quant-r-a">R$Total</div>
                            </td>
                            <td><input class="botao-input-quant-3-r-a" type="text" value="'.$s6.'" name="total"></td>
                        </tr>
                    </table>
                </div>
                    <table class="caixa-quant-4-r-a">
                        <tr>
                            <td>
                            <div class="texto-medio-quant-r-a">Faltando</div>
                            <input class="check-quant-r-a" type="checkbox" name="falta">
                            </td>
                            <td>
                                <div class="texto-medio-quant-r-a">Avariado</div>
                                <input class="check-quant-r-a" type="checkbox" name="avariado">
                            </td>
                        </tr>
                    </table>
                    <br>
                ';
            }
        }
        }
        }}
?>
    </div>
    </div>
</body>