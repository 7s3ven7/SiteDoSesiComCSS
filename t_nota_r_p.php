<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro nota de recebimento</title>
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
    <div class="caixa-tela-informacao-geral">
    <div class="texto-central2-quantitativo-e-p">Escreva sua nota fiscal</div>  
        <form method="POST" action="t_nota_r_p.php">
            <table class="tabela_quantitativo_e_p">
        <div id="">
        <div id="">
            <div class="">Número da Danfe</div>
            <input class="" type="text" name="danfe">
        </div>
        <div id="">
            <div class="">Número Nota</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CNPJ Empresa</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CEP do Empresa</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Data de emissão</div>
            <input class="" type="date" name="nota">
        </div>
        <div id="">
            <div class="">Hora da emissão</div>
            <input class="" type="time" name="nota">
        </div>
        <div id="">
            <div class="">Nome Empresa</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Telefone Empresa</div>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Código</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Descrição do Produto</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Lote</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">NCM</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CST</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CFOP</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Unidade</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Quantidade</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Valor unitário</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Valor total</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Nome Remetente</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">Telefone Remetente</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="">
            <div class="">CNPJ Remetente</div>
            <hr>
            <input class="" type="text" name="nota">
        </div>
        <div id="conta-geral">Professor - <?php echo $nome;?></div>
</body>

</html>