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
        <?php
    session_start();
        $hostname = "127.0.0.1";
        $name = "root";
        $password = "root";
        $DB = "dados";

        $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
        if ($conexao->connect_errno) {
            echo "Failed connection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
            header("Location: t_a.php");
            exit();
        } else {
            
            $n_solici = $_POST['n_soli'];

            $sql = "SELECT p.und, p.quant_und, p.quant_prod, p.nome_prod, e.anguar,e.rua,e.coluna,e.andar,e.ap
            FROM `pedido_cliente_p` p
            JOIN `estoque` e
            ON p.cod_forne = e.cod_forne
            WHERE solici = $n_solici
            LIMIT 1;";            

	        $resultado = $conexao->query($sql);

            if($resultado->num_rows != 0){
                while($row = mysqli_fetch_array($resultado)){
                $UND = $row['0'];
                $Quant_und = $row['1'];
                $Quant_prod = $row['2'];
                $Nome_prod = $row['3'];
                $Hangar = $row['4'];
                $Rua = $row['5'];
                $Coluna = $row['6'];
                $Andar = $row['7'];
                $Ap = $row['8'];
                echo '
                <table class="">
                    <tr>
                        <td class="">Nome do produto: 
                        <input class="" type="number" value="'.$Nome_prod.'" disabled></td>
                        <td class="">Unidade: 
                        <input class="" type="number" value="'.$UND.'" disabled></td>
                        <td class="">Quantidade de unidades: 
                        <input class="" type="number" value="'.$Quant_und.'" disabled></td>
                        <td class="">Quantidade de produtos: 
                        <input class="" type="number" value="'.$Quant_prod.'" disabled><td>
                    </tr>
                    <tr>
                        <td class="">Hangar: 
                        <input class="" type="number" value="'.$Hangar.'" disabled></td>
                        <td class="">Rua: 
                        <input class="" type="number" value="'.$Rua.'" disabled></td>
                        <td class="">Coluna: 
                        <input class="" type="number" value="'.$Coluna.'" disabled></td>
                        <td class="">Andar: 
                        <input class="" type="number" value="'.$Andar.'" disabled></td>
                        <td class="">Ap: 
                        <input class="" type="number" value="'.$Ap.'" disabled></td>
                        <td><input class="" type="submit" value="pegar" name="pegar"</td>
                    </tr>
                <hr>
                ';
                }
            }else{
                echo 'Produtos não encontrados';
            }
        }
?>
    </div>
    </div>