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
        <link rel="stylesheet" href="CSS/carga.css">
        <meta http-equiv="Content-Type" content="text/html; charset= utf-8 " />
    </head>
    <body>
        <div class="texto">Menu</div>
        <div class="box">
        <div class="texto-box">Cargas</div>
        <br>
        <div>Pergunta:<input type="text"></div>
        <br>
        <div>Pergunta:<input type="text"></div>
        <br>
        <div>Pergunta:<input type="text"></div>
        <br>
        <div>Pergunta:<input type="text"></div>
        <br>
        <div>Pergunta:<input type="text"></div>
        <br>
        <div>Pergunta:<input type="text"></div>
        <br>
        <div>Pergunta:<input type="text"></div>
        <br>
        <div>Pergunta:<input type="checkbox"></div>
        <br>
        <div>Pergunta:<input type="checkbox"></div>
        <br>
        <div>Pergunta:<input type="checkbox"></div>
        <br>
        <div>Pergunta:<input type="checkbox"></div>
        <br>
        <div>Pergunta:<input type="checkbox"></div>
        <br>
        <div>Pergunta:<input type="checkbox"></div>
        <br>
        <div>Pergunta:<input type="checkbox"></div>
    
    
        </div>
        <br><br><br><br>
        <form action="Tela.php">
        <input id="button" value="Recebimento" type="submit">
        </form>
        <form action="Conferencia.php">
        <input id="button-micro" value="Conferencia" type="submit">
        </form>
        <form action="Recebimento.php">
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