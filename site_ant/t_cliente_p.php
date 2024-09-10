<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>
<?php
    $nome = $_GET['nome'];
    function redirect(){
        global $nome;
        if(isset($_GET['nome_atividade'])){
            $nome_atividade = $_GET['nome_atividade'];
            echo $nome.'&nome_atividade='.$nome_atividade;
        }else{
            echo $nome;
        }
    }
    $hostname = "127.0.0.1";
    $name = "u935055604_wesley";
    $password = "XwZX1383";
    $DB = "u935055604_dados";
    $conexao = new mysqli($hostname, $name, $password, $DB);
    function exibir(){
        global $conexao;
        $sql = 'SELECT * FROM `cliente_p`';
        $result = $conexao -> query($sql); 
        if(mysqli_num_rows($result) > 0){
            echo '<br><table class="borda">
            <tr class="borda"><td class="borda">CNPJ</td><td class="borda">Atividade</td><td class="borda">Nome_C</td><td class="borda">Telefone</td><td class="borda">Gmail</td><td class="borda">CEP</td></tr>';
            while($row = mysqli_fetch_array($result)){
                $cnpj = $row['0'];
                $nome_atividade_c = $row['1'];
                $nome_c = $row['2'];
                $telefone = $row['3'];
                $gmail = $row['4'];
                $cep = $row['5'];
                echo '<tr><td class="borda">'.$cnpj.'</td><td class="borda">'.$nome_atividade_c.'</td><td class="borda">'.$nome_c.'</td><td class="borda">'.$telefone.'</td><td class="borda">'.$gmail.'</td><td class="borda">'.$cep.'</td></tr>';
        }
        echo '</table>';       
    }}
    function cadastro(){
        global $conexao;
        $nome_atividade = $_GET['nome_atividade'];
        $nome_c = $_POST["nome_c"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];
        $gmail = $_POST["gmail"];
        $cep = $_POST["cep"];
        $sql = 'INSERT INTO `cliente_p` (`CNPJ_c`,`id_atividade`,`nome_c`,`fone_c`,`gmail_c`,`CEP_c`) VALUES ("'.$cnpj.'","'.$nome_atividade.'","'.$nome_c.'","'.$telefone.'","'.$gmail.'","'.$cep.'")';
        $result = $conexao -> query($sql);
    }
        ?>

<body>
    <div class='caixa-menu-geral'>
        <div class='espaco'></div>
        <details>
            <summary>Criações</summary>
            <form method='POST' action='t_turma.php?nome=<?php redirect()?>'>
                <input class='botao-sumario' type='submit' value='Turmas'>
            </form>
            <form method='POST' action='t_atividade.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Atividade'>
            </form>
        </details>
        <details>
            <summary>Cadastros</summary>
            <form method='POST' action='t_fornecedor_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Fornecedor'>
            </form>
            <form method='POST' action='t_empresa_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Empresa'>
            </form>
            <details>
                <summary>Cliente</summary>
                <form method='POST' action='t_cliente_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Cadastro'>
                </form>
                <form method='POST' action='t_pedido_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Pedido'>
                </form>
            </details>
        </details>
        <details>
            <summary>Produto</summary>
            <form method='POST' action='t_produto_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Cadastro'>
            </form>
        </details>
        <details>
            <summary>Recebimento</summary>
            <form method='POST' action='t_quantitativo_r_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_r_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
        <details>
            <summary>Expedição</summary>
            <form method='POST' action='t_quantitativo_e_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST' action='t_nota_e_p.php?nome=<?php redirect()?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
    </div>
    <div class="menu">Menu</div>
    <div class='caixa-tela-informacao-geral'>
        <form method="POST" action="t_cliente_p.php?nome=<?php redirect();?>">
            <div>CNPJ: <input placeholder="cnpj" name="cnpj"></div>
            <div>Nome: <input placeholder="nome" name="nome_c"></div>
            <div>Telefone: <input placeholder="(00) 00000-0000" name="telefone"></div>
            <div>Gmail: <input placeholder="exemplo@gmail.com" name="gmail"></div>
            <div>CEP: <input placeholder="000-000-00" name="cep"></div>
            <br>
            <input type="submit" value="enviar">
        </form>
        <?php
            exibir();
            if(isset($_POST["cnpj"]) and isset($_POST["nome_c"]) and isset($_POST["telefone"]) and isset($_POST["gmail"]) and isset($_POST["cep"])){
            cadastro();
            }
        ?>
    </div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>

</html>