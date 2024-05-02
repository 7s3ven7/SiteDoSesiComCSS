<!DOCTYPE html>
<?php
        session_start();

        if (empty($_SESSION['tipo'])){
            header('Location: index.php');
            exit();
        } else {
            $nome = $_SESSION['tipo'];
            echo '<div class="nome"> Aluno: '.$_SESSION['tipo'].'</div>';
        }    
        ?>

<head>
    <link rel="stylesheet" href="carga.css">
    <meta http-equiv="Content-Type" content="text/html; charset= utf-8 " />
</head>

<body>
    <div class="texto">Menu</div>
    <div class="espaco">
        <div>
            <form method="" action="Recebimento.php">
                <input type="submit" id="botao" value="Recebimento">
            </form>
            <div class="box-mini">
                <form method="" action="Carga.php">
                    <input type="submit" id="botao-mini" value="Carga">
                </form>
                <form method="" action="Conferencia.php">
                    <input type="submit" class="botao-mini" value="Conferencia">
                </form>
            </div>
        </div>
        <br>
        <form method="" action="Movimentacao.php">
            <input type="submit" class="botao" value="Movimentação">
        </form>
        <form method="" action="Estoque.php">
            <input type="submit" class="botao" value="Estoque">
        </form>
        <form method="P" action="Picking.php">
            <input type="submit" class="botao" value="Picking">
        </form>
        <form method="" action="Expedicao.php">
            <input type="submit" class="botao" value="Expedição">
        </form>
        <form method="" action="Relatorio.php">
            <input type="submit" class="botao" value="Relatório">
        </form>
        <form method="" action="Controle.php">
            <input type="submit" class="botao" value="Controle">
        </form>
    </div>
    <div class="box">
        <table>
            <tr>
                <td>
                    <div>Placa do caminhão: </div>
                </td>
                <td><input type="text" value="Placa" name="placa_caminhao"></td>
            </tr>
            <tr>
                <td>
                    <div>Nome do motorista: </div>
                </td>
                <td><input type="text" value="Nome" name="nome_motorista"></td>
            </tr>
            <tr>
                <td>
                    <div>Container: </div>
                </td>
                <td><input type="text" value="Container" name="container"></td>
            </tr>
            <tr>
                <td>
                    <div>Navio: </div>
                </td>
                <td><input type="text" value="Navio" name="navio"></td>
            </tr>
            <tr>
                <td>
                    <div>Nome cliente: </div>
                </td>
                <td><input type="text" value="Cliente" name="cliente"></td>
            </tr>
            <tr>
                <td>
                    <div>Tipo do container: </div>
                </td>
                <td><input type="text" value="tipo" name="tipo_container"></td>
            </tr>
            <tr>
                <td>
                    <div>Lacre: </div>
                </td>
                <td><input type="text" value="KL-0000" name="lacre"></td>
            </tr>
            <tr>
                <td>
                    <div>Lacre SIF [7]: </div>
                </td>
                <td><input type="text" value="0000001" name="lacre_sif"></td>
            </tr>
            <tr>
                <td>
                    <div>Temperatura: </div>
                </td>
                <td><input type="text" value="25°C" name="temperatura"></td>
            </tr>
            <tr>
                <td>
                    <div>IMO: </div>
                </td>
                <td><input type="text" value="1 - 9" name="imo"></td>
            </tr>
            <tr>
                <td>
                    <div>N° ONU: </div>
                </td>
                <td><input type="text" value="2546" name="n_onu"></td>
            </tr>
            <tr>
                <td>
                    <div>Código de fornecedor: </div>
                </td>
                <td><input type="text" value="000001" name="cod_fornecedor"></td>
            </tr>
            <tr>
                <td>
                    <div>Nome da empresa: </div>
                </td>
                <td><input type="text" value="apple" name="nome_empresa"></td>
            </tr>
            <tr>
                <td>
                    <div>CNPJ da empresa: </div>
                </td>
                <td><input type="text" value="000.000.000-00" name="cnpj"></td>
            </tr>
            <tr>
                <td>
                    <div>Nome do Produto: </div>
                </td>
                <td><input type="text" value="cachaça" name="nome_produto"></td>
            </tr>
            <tr>
                <td>
                    <div>Quantidade do produto: </div>
                </td>
                <td><input type="text" value="1" name="quantidade_produto"></td>
            </tr>
            <tr>
                <td>
                    <div>Número do pedido: </div>
                </td>
                <td><input type="text" value="1" name="numero_pedido"></td>
            </tr>

        </table>
    </div>
</body>

</html>