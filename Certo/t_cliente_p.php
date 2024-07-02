<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>
<?php
    $nome_atividade = $_GET['nome_atividade'];
    $nome = $_GET['nome'];
?>

<body>
    <div class=""></div>
    <details class="">
        <summary class="">Criações</summary>
        <form method="POST" action="t_turma.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Turmas"></div>
        </form>
        <form method="POST"
            action="t_atividade.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Atividade"></div>
        </form>
    </details>
    <details class="">
        <summary class="">Cadastros</summary>
        <form method="POST"
            action="t_fornecedor_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Fornecedor"></div>
        </form>
        <form method="POST"
            action="t_empresa_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="">Cliente</summary>
            <form method="POST"
                action="t_cliente_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="" type="submit" value="Cadastro"></div>
            </form>
            <form method="POST"
                action="t_pedido_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
                <input class="" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="">
        <summary class="">Produto</summary>
        <form method="POST"
            action="t_produto_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="">
        <summary class="">Recebimento</summary>
        <form method="POST"
            action="t_quantitativo_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Quantitativo"></div>
        </form>
        <form method="POST"
            action="t_nota_r_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="">
        <summary class="">Expedição</summary>
        <form method="POST"
            action="t_quantitativo_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Quantitativo">
        </form>
        <form method="POST"
            action="t_nota_e_p.php?nome=<?php echo $nome;?>&nome_atividade=<?php echo $nome_atividade;?>">
            <input class="" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class=""></div>
    <div class="">Menu</div>
    <div class="">
    </div>

    <div class="">
        <form method="POST" action="t_cliente_p.php">
            <div class="">Quantos clientes irás registrar: <input class="" type="number" name="vezes"
                    placeholder="Número de vezes*"></div>
            <input class="" type="submit">
        </form>
<?php
    $hostname = "127.0.0.1";
    $name = "root";
    $password = "root";
    $DB = "dados";

    session_start();

    $conexao = new mysqli($hostname, $name, $password, $DB);

    if(isset($_POST['vezes'])){
        $i = $_POST['vezes'];
        if($i <= 0){
            echo '
            <br><br>
            <div class="">Digite um número superior!</div>';
        }else{
            $l = $i;
            $numero = 1;
            $v1 = 'cnpj';
            $v2 = 'nome_cliente';
            $v3 = 'gmail';
            $v4 = 'cep';
            $v5 = 'telefone';
            echo '<form method="POST" action="t_cliente_p.php" name="cadastro">';
            echo '<br>';
            for($i;$i>0;$i){
                $i -= 1;
                if(isset($_POST['cadastro'])){
                    echo 'oi';
                        $a = $_POST['cnpj']; //CNPJ
                        $b = $_POST['nome_cliente']; //Nome do fornecedor
                        $c = $_POST['gmail']; //Email
                        $d = $_POST['cep']; //CEP
                        $e = $_POST['telefone']; //Telefone
                        $id_atividade = $_GET['id_atividade'];
                        $l = $_GET['$l'];
                            
                        while($l>0){
                            $v1 = $_POST[$a];
                            $v2 = $_POST[$b];
                            $v3 = $_POST[$c];
                            $v4 = $_POST[$d];
                            $v5 = $_POST[$e];
                            $v6 = $_POST[$f];
                            $vtotal = $v11 * ($v9*$v10);
                            for($z = 1;$z>0;$z){
                                $SQL = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`nome_f`,`gmail_f`,`CEP_f`,`fone_f`,`id_atividade`) 
                                VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ','.$id_atividade.');';
                                $resultado = $conexao->query($SQL);
                                $z -= 1;
                            }
                            $z = 1;
                            $a = $a.'p';
                            $b = $b.'p';
                            $c = $c.'p';
                            $d = $d.'p';
                            $e = $e.'p';
                            $f = $f.'p';
                            $g = $g.'p';
                            $h = $h.'p';
                            $i = $i.'p';
                            $j = $j.'p';
                            $k = $k.'p';
                            $l = $l.'p';
                            $l -= 1;
                        }
                        $v1 = 'cnpj';
                        $v2 = 'nome_cliente';
                        $v3 = 'gmail';
                        $v4 = 'cep';
                        $v5 = 'telefone';
                        for($i;$i>0;$i){
                            $i -= 1;
                            $numero += 1;
                            $v1 = $v1.'p';
                            $v2 = $v2.'p';
                            $v3 = $v3.'p';
                            $v4 = $v4.'p';
                            $v5 = $v5.'p';
                        }
                    $v1 = $_POST['1'];
                    $v2 = $_POST['2'];
                    $v3 = $_POST['3'];
                    $v4 = $_POST['4'];
                    $v5 = $_POST['5'];
            
                    $SQL = 'INSERT INTO `cliente_p` (`CNPJ_c`,`nome_c`,`gmail_c`,`CEP_c`,`fone_c`) 
                    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ');';
                                
                    $resultado = $conexao->query($SQL);
            
                    $conexao->close();
                }
                echo'
                <div class="">'.$numero.'° Cliente</div>
                <br>
                <table class="">
                    <tr>
                        <td class="">CNPJ/CPF: </td>
                        <td><input class="" type="text" name="'.$v1.'" placeholder="00.000.000/0000-00 ou 000.000.000-00"></td>
                        <td class="">Nome do cliente: </td>
                        <td><input class="" type="text" name="'.$v2.'" placeholder="Nome"></td>
                    </tr>
                    <tr>
                        <td class="">Gmail: </td>
                        <td><input class="" type="text" name="'.$v3.'" placeholder="exemplo@gmail.com"></td>
                        <td class="">CEP: </td>
                        <td><input class="" type="text" name="'.$v4.'" placeholder="0000-000"></td>
                    </tr>
                    <tr>
                        <td class="">Telefone: </td>
                        <td><input class="" type="text" name="'.$v5.'" placeholder="(00) 00000-0000 "></td>
                    </tr>
                </table>';
                $numero += 1;
                $v1 = $v1.'p';
                $v2 = $v2.'p';
                $v3 = $v3.'p';
                $v4 = $v4.'p';
                $v5 = $v5.'p';
            }              
            echo '<table class="">';
            echo '<input class="" type="submit">';
            echo'<div class=""></div>';
        }
    }
    echo'</form>';
?>
<?php
    $a = $_POST['cnpj']; //CNPJ
    $b = $_POST['nome_fornecedor']; //Nome do fornecedor
    $c = $_POST['gmail']; //Email
    $d = $_POST['cep']; //CEP
    $e = $_POST['telefone']; //Telefone
    $id_atividade = $_GET['id_atividade'];
    $l = $_GET['$l'];
    
    while($l>0){
        $v1 = $_POST[$a];
        $v2 = $_POST[$b];
        $v3 = $_POST[$c];
        $v4 = $_POST[$d];
        $v5 = $_POST[$e];
        $v6 = $_POST[$f];
        $vtotal = $v11 * ($v9*$v10);
        for($z = 1;$z>0;$z){
            $SQL = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`nome_f`,`gmail_f`,`CEP_f`,`fone_f`,`id_atividade`) 
            VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ','.$id_atividade.');';
            $resultado = $conexao->query($SQL);
            $z -= 1;
        }
        $z = 1;
        $a = $a.'p';
        $b = $b.'p';
        $c = $c.'p';
        $d = $d.'p';
        $e = $e.'p';
        $f = $f.'p';
        $g = $g.'p';
        $h = $h.'p';
        $i = $i.'p';
        $j = $j.'p';
        $k = $k.'p';
        $l = $l.'p';
        $l -= 1;
    }
        $v1 = 'cnpj';
        $v2 = 'nome_cliente';
        $v3 = 'gmail';
        $v4 = 'cep';
        $v5 = 'telefone';
        for($i;$i>0;$i){
            $i -= 1;
            $numero += 1;
            $v1 = $v1.'p';
            $v2 = $v2.'p';
            $v3 = $v3.'p';
            $v4 = $v4.'p';
            $v5 = $v5.'p';
        }
    $v1 = $_POST['1'];
    $v2 = $_POST['2'];
    $v3 = $_POST['3'];
    $v4 = $_POST['4'];
    $v5 = $_POST['5'];

    $SQL = 'INSERT INTO `clientes_p` (`CNPJ_c`,`nome_c`,`gmail_c`,`CEP_c`,`fone_c`) 
    VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ');';
        
    $resultado = $conexao->query($SQL);

    $conexao->close();
    header("Location: t_cliente_p.php"); //Envia para a tela de Login ao Cadastrar

?>
    </div>
    <div id="">Professor - <?php echo $nome;?></div>
</body>

</html>