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
        <form action="t_picking_a.php" method="POST">
            <div class="">
                <div class="">Digite o nome do produto</div>
                <input class="" type="text" name="nome_p">
                <input class="" type="submit">
                <div class="">
        </form>
        <?php
    session_start();
    if (isset($_POST['nome_p'])){
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
            
            $sql = "SELECT ";

	        $resultado = $conexao->query($sql);
            if($resultado->num_rows != 0){
                while($row = mysqli_fetch_array($resultado)){
                echo '
                <hr>
                <table class="">
                    <tr>
                        <td class="">Nº Pedido: 
                        <input class="" type="number" value="'.$v.'" disabled></td>
                    </tr>
                </hr>
                ';
                }
            }else{
                echo 'Produto não encontrado';
            }
        }
    }
?>
    </div>
    </div>