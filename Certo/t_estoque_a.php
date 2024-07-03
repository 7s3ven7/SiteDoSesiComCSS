<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html" ;charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
</head>

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
        <form action="t_estoque_a.php" method="POST">
            <div class="">
                <div class="">Digite o nome do produto</div>
                <input class="" type="text" name="nome_p">
                <input class="" type="submit">
                <div class="">
        </form>
        <?php
    if (isset($_POST['nome_p'])){
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

            $nome= $_POST['nome_p'];

	        $sql="SELECT p.tipo,p.data_v,p.lote,p.nome_prod,p.marca_prod,p.und,p.quant_und,p.quant_prod,p.valor_und,p.kg,e.anguar,e.rua,e.coluna,e.andar,e.ap 
                FROM `produto_p` p
                JOIN `estoque` e ON p.cod_forne = e.cod_forne AND p.cod_inter = e.cod_inter
                WHERE p.nome_prod LIKE '%".$nome."%';";
	        $resultado = $conexao->query($sql);
            if($resultado->num_rows != 0){
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
                <hr>
                <table class="">
                    <tr>
                        <td class="">Nome do produto
                        <input class="" type="text" value="'.$s4.'" disabled></td>
                        <td class="">Tipo do produto
                        <input class="" type="text" value="'.$s1.'" disabled></td>
                        <td class="">Validade
                        <input class="" type="text" value="'.$s2.'" disabled></td>
                    </tr>
                    <tr>
                        <td class="">Lote
                        <input class="" type="text" value="'.$s3.'" disabled></td>
                        <td class="">Marca do Produto
                        <input class="" type="text" value="'.$s5.'" disabled></td>
                        <td class="">Peso
                        <input class="" type="text" value="'.$s10.'" disabled></td>
                    </tr>
                    <tr>
                        <td class="">Unidade
                        <input class="" type="text" value="'.$s6.'" name="qtd" disabled></td>
                        <td class="">Quantidade
                        <input class="" type="text" value="'.$s7.'" name="qtd" disabled></td>
                        <td class="">R$/unit
                        <input class="" type="text" value="'.$s9.'" name="unit" disabled></td>
                    </tr>
                    <tr>
                        <td class="">R$/Total
                        <input class="" type="text" value="'.$s9*$s7.'" name="total" disabled></td>
                        <td class="">Hangar
                        <input class="" type="text" value="'.$s11.'" name="" disabled></td>
                        <td class="">Rua
                        <input class="" type="text" value="'.$s12.'" name="" disabled></td>
                    </tr>
                    <tr>
                        <td class="">Coluna
                        <input class="" type="text" value="'.$s13.'" name="" disabled></td>
                        <td class="">Andar
                        <input class="" type="text" value="'.$s14.'" name="" disabled></td>
                        <td class="">Apartamento
                        <input class="" type="text" value="'.$s15.'" name="" disabled></td>
                    </tr>
                </table>
                </hr>
                ';
                }
            }else{
                echo 'Produto não encontrado';
            }
        }
    }else{
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
	        $sql="SELECT p.tipo,p.data_v,p.lote,p.nome_prod,p.marca_prod,p.und,p.quant_und,p.quant_prod,p.valor_und,p.kg,e.anguar,e.rua,e.coluna,e.andar,e.ap 
            FROM `produto_p` p
            JOIN `estoque` e ON p.cod_forne = e.cod_forne AND p.cod_inter = e.cod_inter;";
	        $resultado = $conexao->query($sql);
            if($resultado->num_rows != 0){
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
                    <hr>
                    <table class="">
                        <tr>
                            <td class="">Nome do produto
                            <input class="" type="text" value="'.$s4.'" disabled></td>
                            <td class="">Tipo do produto
                            <input class="" type="text" value="'.$s1.'" disabled></td>
                            <td class="">Validade
                            <input class="" type="text" value="'.$s2.'" disabled></td>
                        </tr>
                        <tr>
                            <td class="">Lote
                            <input class="" type="text" value="'.$s3.'" disabled></td>
                            <td class="">Marca do Produto
                            <input class="" type="text" value="'.$s5.'" disabled></td>
                            <td class="">Peso
                                <input class="" type="text" value="'.$s10.'" disabled></td>
                        </tr>
                        <tr>
                            <td class="">Unidade
                            <input class="" type="text" value="'.$s6.'" name="qtd" disabled></td>
                            <td class="">Quantidade
                            <input class="" type="text" value="'.$s7.'" name="qtd" disabled></td>
                            <td class="">R$/unit
                            <input class="" type="text" value="'.$s9.'" name="unit" disabled></td>
                        </tr>
                        <tr>
                        <td class="">R$/Total
                            <input class="" type="text" value="'.$s9*$s7.'" name="total" disabled></td>
                            <td class="">Hangar
                            <input class="" type="text" value="'.$s11.'" name="" disabled></td>
                            <td class="">Rua
                            <input class="" type="text" value="'.$s12.'" name="" disabled></td>
                        </tr>
                        <tr>
                            <td class="">Coluna
                            <input class="" type="text" value="'.$s13.'" name="" disabled></td>
                            <td class="">Andar
                            <input class="" type="text" value="'.$s14.'" name="" disabled></td>
                            <td class="">Apartamento
                            <input class="" type="text" value="'.$s15.'" name="" disabled></td>
                        </tr>
                    </table>
                    <hr>
                    ';
                }
            }
        }
    }

?>
    </div>
    </div>