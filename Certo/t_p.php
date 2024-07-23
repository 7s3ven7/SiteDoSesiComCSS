<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
    if(isset($_GET['nome_atividade'])){
        $nome_atividade = $_GET['nome_atividade'];
        $nome = $_GET['nome'];}
    else{
        $nome = $_GET['nome'];}
        ?>

<body>
    <div class='caixa-menu-geral'>
        <div class='espaco'></div>
        <details class='details'>
            <summary class='sumario'>Criações</summary>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_turma.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_turma.php?nome='.$nome;}?>'>
                <input class='botao-sumario' type='submit' value='Turmas'>
            </form>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_atividade.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_atividade.php?nome='.$nome;}?>'>
                <input class=' botao-sumario' type='submit' value='Atividade'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Cadastros</summary>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_fornecedor_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_fornecedor_p.php?nome='.$nome;}?>'>
                <input class=' botao-sumario' type='submit' value='Fornecedor'>
            </form>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_empresa_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_empresa_p.php?nome='.$nome;}?>'>
                <input class=' botao-sumario' type='submit' value='Empresa'>
            </form>
            <details class='details'>
                <summary class='sumario'>Cliente</summary>
                <form method='POST'
                    action='
                    <?php if(isset($_GET['nome_atividade'])){echo 't_cliente_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_cliente_p.php?nome='.$nome;}?>'>
                    <input class=' botao-sumario' type='submit' value='Cadastro'>
                </form>
                <form method='POST'
                    action='
                    <?php if(isset($_GET['nome_atividade'])){echo 't_pedido_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_pedido_p.php?nome='.$nome;}?>'>
                    <input class=' botao-sumario' type='submit' value='Pedido'>
                </form>
            </details>
        </details>
        <details class='details'>
            <summary class='sumario'>Produto</summary>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_produto_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_produto_p.php?nome='.$nome;}?>'>
                <input class=' botao-sumario' type='submit' value='Cadastro'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Recebimento</summary>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_quantitativo_r_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_quantitativo_r_p.php?nome='.$nome;}?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_nota_r_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_nota_r_p.php?nome='.$nome;}?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
        <details class='details'>
            <summary class='sumario'>Expedição</summary>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_quantitativo_e_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_quantitativo_e_p.php?nome='.$nome;}?>'>
                <input class=' botao-sumario' type='submit' value='Quantitativo'>
            </form>
            <form method='POST'
                action='
                <?php if(isset($_GET['nome_atividade'])){echo 't_nota_e_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade;}else{echo 't_nota_e_p.php?nome='.$nome;}?>'>
                <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
            </form>
        </details>
    </div>
    <div class='caixa-tela-informacao-geral'></div>
    <div class='menu'>Menu</div>
    <div class='conta-geral'>Professor - <?php echo $nome;?></div>
</body>

</html>