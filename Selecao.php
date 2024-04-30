<!DOCTYPE html>
    <head>
        <title>Teste de site</title>
    </head>
    <body>
        <?php
        session_start();
            header('Location: index.php');
            exit();
        ?>

    </body>
</html>