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
            <input type="text" name="n_pedido">
            <input type="submit">
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
                $s13 = $row['12'];
                $s14 = $row['13'];
                $s15 = $row['14'];
                $s16 = $row['15'];
            echo '        
            <table class="tabela">
                <tr>
                    <td>Código Interno: </td>
                    <td><input class="botao-tabela" type="text" value='.$s1.' name="1" disabled></td>
                    <td>Código do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" value='.$s2.'  name="2" disabled></td>
                </tr>
                <tr>
                    <td>Nome da empresa: </td>
                    <td><input class="botao-tabela" type="text" value='.$s3.'  name="3" disabled></td>
                    <td>CNPJ da empresa: </td>
                    <td><input class="botao-tabela" type="text" value='.$s4.'  name="4" disabled></td>
                </tr>
                <tr>
                    <td>Modelo do container: </td>
                    <td><input class="botao-tabela" type="text" value='.$s5.'  name="5" disabled></td>
                    <td>Navio: </td>
                    <td><input class="botao-tabela" type="text" value='.$s6.'  name="6" disabled></td>
                </tr>
                <tr>
                    <td>Nome do destinatário: </td>
                    <td><input class="botao-tabela" type="text" value='.$s7.'  name="7" disabled></td>
                    <td>Tipo do container: </td>
                    <td><input class="botao-tabela" type="text" value='.$s8.'  name="8" disabled></td>
                </tr>
                <tr>
                <td>Nome do destinatário: </td>
                <td><input class="botao-tabela" type="text" value='.$s9.'  name="7" disabled></td>
                <td>Tipo do container: </td>
                <td><input class="botao-tabela" type="text" value='.$s10.'  name="8" disabled></td>
                <tr>
                <td>Nome do destinatário: </td>
                <td><input class="botao-tabela" type="text" value='.$s11.'  name="7" disabled></td>
                <td>Tipo do container: </td>
                <td><input class="botao-tabela" type="text" value='.$s12.'  name="8" disabled></td>
            </tr>
            <tr>
            <td>Nome do destinatário: </td>
            <td><input class="botao-tabela" type="text" value='.$s13.'  name="7" disabled></td>
            <td>Tipo do container: </td>
            <td><input class="botao-tabela" type="text" value='.$s14.'  name="8" disabled></td>
            <tr>
            <td>Nome do destinatário: </td>
            <td><input class="botao-tabela" type="text" value='.$s15.'  name="7" disabled></td>
        </tr>
        </tr>
            </tr>
            </table>
        ';
        }else{
            ?>
        <script>
        alert('Código não encontrado no Banco de Dados', 301, true);
        </script>
        <?php
        }
    
    }}
        ?>
    </div>