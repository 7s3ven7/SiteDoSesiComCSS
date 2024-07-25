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
            if(isset($_GET['turma'])){
            $sql = "DELETE FROM `turma` WHERE `turma` = '".$_GET['turma']."'";
            $resultado = $conexao->query($sql);
            $sql = "DELETE FROM `usuario` WHERE `cod_grupo` = '".$_GET['turma']."'";
            $resultado = $conexao->query($sql);
            header("location:t_turma.php?nome=".$_GET['nome']."");
            }
            if(isset($_GET['id'])){
                $sql = "SELECT `quant_alu` FROM `turma` WHERE `turma` = '".$_GET['turma2']."'";
                echo $sql;
                $resultado = $conexao->query($sql);
                $row = mysqli_fetch_array($resultado);
                $quant_alu = $row[0];
                $quant_alu = $quant_alu-1;
                $sql = "UPDATE `turma` SET `quant_alu` = '".$quant_alu."' WHERE `turma` = '".$_GET['turma2']."'";
                echo $sql;
                $resultado = $conexao->query($sql);
                $sql = "DELETE FROM `usuario` WHERE `id_usuario` = '".$_GET['id']."'";
                echo $sql;
                $resultado = $conexao->query($sql);
                header("location:t_turma.php?nome=".$_GET['nome']."&turma=".$_GET['turma2']."&pagina=".$_GET['pagina']."");
                
            }
        }
?>