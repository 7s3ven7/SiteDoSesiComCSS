<?php
    $hostname = "127.0.0.1";
    $name = "root";
    $password = "root";
    $DB = "dados";
    $conexao = new mysqli($hostname, $name, $password, $DB);
        if ($conexao->connect_errno) {
            echo "Failes conection: " . $conexao->connect_error;
            exit();
        } else {
            $sql = "DELETE FROM `turma` WHERE `turma` = '".$_GET['turma']."'";
            $resultado = $conexao->query($sql);
            header("location:t_turma.php?nome=".$_GET['nome']."");
        }
?>