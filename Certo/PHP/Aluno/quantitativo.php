<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../CSS/site.css">
    <meta http-equiv="Content-Type" content="text/html" ;charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
</head>

<body>
    <form action="quantitativo.php" method="POST">
        <div>aaaaaaaaaaaa</div>
        <input type="number" name="n_pedido">
        <input type="submit">
    </form>
    <?php
        if(isset($cod)){
            echo $cod;
        } 
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
            echo $s1;
        }}}
        ?>