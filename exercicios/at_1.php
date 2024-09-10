<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form method='POST' action='at_1.php'>
    <div>CPF:</div>
    <input type="text" name="CPF">
    <div>NOME: </div>
    <input type="text" name="nome">
    <div>IDADE:</div>
    <input type="text" name="idade">
    <div>NUMERO: </div>
    <input type="text" name="numero">
    
                <input type='submit' value='Cadastro'>
            </form>  
</body>
<?php
    $hostname = "127.0.0.1";
    $name = "root";
    $password = "root";
    $DB = "at_1";

        $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
    if(isset($_POST['CPF']) and isset($_POST['nome']) and isset($_POST['idade']) and isset($_POST['numero'])){
        if ($conexao->connect_errno) {
            echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
            exit();
        } else {
            $v1 = $_POST['CPF'];
            $v2 = $_POST['nome'];
            $v3 = $_POST['idade'];
            $v4 = $_POST['numero'];

                    $SQL = 'INSERT INTO `pessoas` (`CPF`,`nome`,`idade`,`numero`) 
                    VALUES ("' . $v1 . '","' . $v2 . '","' . $v3 . '","' . $v4 . '")';
                    $resultado = $conexao->query($SQL);
                }
                $conexao->close();
                header("");
            }else{
                ;
            }   
        ?>

</html>