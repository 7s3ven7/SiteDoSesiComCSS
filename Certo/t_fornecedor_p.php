<!DOCTYPE html>
<html>

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
        <form method="POST" action="t_fornecedor_p.php?nome_atividade=<?php echo $nome_atividade;?>">
            <div class="">Quantos fornecedores irás registrar: <input class="" type="number" name="vezes"
                    placeholder="Número de vezes*"></div>
            <input class="" type="submit">
        </form>
        <!--Aparecer na Tela-->
<?php
    $hostname = "127.0.0.1";
    $name = "root";
    $password = "root";
    $DB = "dados";

    $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB

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
            $v2 = 'nome_fornecedor';
            $v3 = 'gmail';
            $v4 = 'cep';
            $v5 = 'telefone';
            echo'<form method="POST" action="t_fornecedor_p.php?$l='.$l.'&nome_atividade='.$nome_atividade.'">';
            echo'<br>';
            for($i;$i>0;$i){
                $i -= 1;
                echo'
                <div class="">'.$numero.'° Fornecedor</div>
                <br>
                <form method="POST" action="t_fornecedor_p.php?$l='.$l.'&nome_atividade='.$nome_atividade.'" name="cadastro">
                <table class="">
                    <tr>
                        <td class="">CNPJ: </td>
                        <td><input class="" type="text" name="'.$v1.'" placeholder="00.000.000/0000-00"></td>
                        <td class="">Nome do fornecedor: </td>
                        <td><input class="" type="text" name="'.$v2.'" placeholder="Nome"></td>
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
            }              
            echo '<table class="">';
            echo '<input class="" type="submit">';
            echo'<div class=""></div>';
        }
    }
    if(isset($_POST['cadastro'])){
        echo 'oi';
        $v1 = $_POST['cnpj']; //CNPJ
        $v2 = $_POST['nome_fornecedor']; //Nome do fornecedor
        $v3 = $_POST['gmail']; //Email
        $v4 = $_POST['cep']; //CEP
        $v5 = $_POST['telefone']; //Telefone
        $v6 = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        $z = $_GET[$l];
    
        while($z>0){
            for($zz = 1;$zz>0;$zz){
                $SQL = 'INSERT INTO `fornecedor_p` (`CNPJ_f`,`nome_f`,`gmail_f`,`CEP_f`,`fone_f`,`cod_forne`) 
                VALUES (' . $v1 . ',' . $v2 . ',' . $v3 . ',' . $v4 . ',' . $v5 . ','.$v6.');';
                $resultado = $conexao->query($SQL);
                $zz -= 1;
            }       
        }
        $conexao->close();
        header("Location: t_fornecedor_p.php"); //Envia para a tela de Login ao Cadastrar
    }
?>
    </div>
    <div id="">Professor - <?php echo $nome;?></div>
</body>

</html>