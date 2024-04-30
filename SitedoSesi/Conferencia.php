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
        <title>Teste de site</title>
        <link rel="stylesheet" href="../CSS/conferencia.css">
        
        <meta http-equiv="Content-Type" content="text/html; charset= utf-8 " />
    </head>
    <body>
        <div class="texto">Menu</div>
        <div class="box">
        <div class="texto-box">Conferencia</div>
        <br>
        <div class="pergunta">Placa do caminhão:</div>
        <br>
        <div class="pergunta">Nome do motorista:</div>
        <br>
        <div class="pergunta">Containner:</div>
        <br>
        <div class="pergunta">Navio:</div>
        <br>
        <div class="pergunta">Cliente:</div>
        <br>
        <div class="pergunta">Tipo:</div>
        <br>
        <div class="pergunta">Lacre:</div>
        <br>
        <div class="pergunta">Lacre SIF: [7]</div>
        <br>
        <div class="pergunta">Temperatura:</div>
        <br>
        <div class="pergunta">IMO:</div>
        <br>
        <div class="pergunta">N° ONU:</div>
        <div class="box-box-box"><input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text">
        <br>
        <input class="pergunta-box" type="text"></div>
    
        </div>
        <br><br><br><br>
        <form action="Tela.php">
        <input id="button" value="Recebimento" type="submit">
        </form>
        <form action="Recebimento.php">
        <input id="button-micro" value="Conferencia" type="submit">
        </form>
        <form action="Carga.php">
        <input id="button-micro-2" value="Carga" type="submit">
        </form>
        <br>
        <form action="Movimentação.php">
        <input class="button" value="Movimentação" type="submit">
        </form>
        <br>
        <form action="Estoque.php">
        <input class="button" value="Estoque" type="submit">
        </form>
        <br>
        <form action="Picking.php">
        <input class="button" value="Picking" type="submit">
        </form>
        <br>
        <form action="Expedição.php">
        <input class="button" value="Expedição" type="submit">
        </form>
        <br>
        <form action="Relatórios.php">
        <input class="button" value="Relatórios" type="submit">
        </form>
        <br>
        <form action="Controle.php">
        <input class="button" value="Controle" type="submit">
        </form>
        <br>
        <form action="CriarMaterial.php">
        <input class="button" value="Criar material" type="submit">
        </form>
        <br>
        <form action="Mais.php">
        <input class="button" value="Mais" type="submit">
        </form>
        <br>
        <br>
    </body>
</html>