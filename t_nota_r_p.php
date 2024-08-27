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
            <table class="tabela_principal_nota_r_p">
                <tr>
                    <td class="texto-central-quantitativo-e-p">Número da Danfe: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="1" placeholder="1234"></td>
                    <td class="texto-central-quantitativo-e-p">Número Nota: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="2" placeholder="Aplle"></td> 
                </tr>    
                <tr>
                    <td class="texto-central-quantitativo-e-p">CNPJ Empresa: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="3" placeholder="SENU-123456-2"></td>
                    <td class="texto-central-quantitativo-e-p">CEP do Empresa: </td> 
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="4" placeholder="Titanaique"></td>            
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Data de emissão: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="5" placeholder="Aplle"></td>
                    <td class="texto-central-quantitativo-e-p">Hora da emissão: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="6" placeholder="2201"></td>   
                </tr>
                <tr>             
                    <td class="texto-central-quantitativo-e-p">Nome Empresa: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="7" placeholder="Lacre"></td>
                    <td class="texto-central-quantitativo-e-p">Telefone Empresa: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="8" placeholder="SIF"></td>                    
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Código: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="9" placeholder="Temperatura"></td>
                    <td class="texto-central-quantitativo-e-p">Descrição do Produto: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="10" placeholder="IMO"></td>                   
                </tr>
                <tr>                    
                    <td class="texto-central-quantitativo-e-p">Lote: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="11" placeholder="Número"></td>
                    <td class="texto-central-quantitativo-e-p">NCM: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="12" placeholder="A1"></td>                   
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">CST: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ"></td>
                    <td class="texto-central-quantitativo-e-p">CFOP: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Unidade: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ"></td>
                    <td class="texto-central-quantitativo-e-p">Quantidade: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Valor unitário: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ"></td>
                    <td class="texto-central-quantitativo-e-p">Valor total: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ"></td>
                </tr>
                <tr>
                    <td class="texto-central-quantitativo-e-p">Nome Remetente: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ"></td>
                    <td class="texto-central-quantitativo-e-p">Telefone Remetente: </td>
                    <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ"></td>
                </tr>
                <tr>
                <td class="texto-central-quantitativo-e-p">CNPJ Remetente: </td>
                <td><input class="botao-central-escrever-quant-e-p" type="text" name="13" placeholder="CNPJ">
            </table>
        <div id="conta-geral">Professor - <?php echo $nome;?></div>
</body>

</html>