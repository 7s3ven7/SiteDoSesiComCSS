<html>

</html>
<?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";
$conexao = new mysqli($hostname, $name, $password, $DB);
if ($conexao->connect_errno) {
    echo "Failes conection :" . $conexao->connect_error;
    exit();
} else {
  $senha = $conexao->real_escape_string($_POST["senha_secreta"]);
  $sql = "DROP TABLE `cliente`;
  CREATE TABLE `cliente` (
    `id` int(255) NOT NULL,
    `nome` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  ALTER TABLE `cliente`
    ADD PRIMARY KEY (`id`),
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;";
    
  if($senha == 123123){
    $resultado = $conexao->query($sql);
    header('location:../HTML/index.html');
  }else{
    header('location:../HTML/Professor/tela.html');
  }
}
?>