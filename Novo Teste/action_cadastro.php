<html>

</html>
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
    $nome = $conexao->real_escape_string($_POST["nome_criado"]);
    $senha = $conexao->real_escape_string($_POST["senha_criada"]);
    $cargo = $conexao->real_escape_string($_POST["cargo_criado"]);
    $codg = $conexao->real_escape_string($_POST["codigo_sala_criado"]);
    $codi = $conexao->real_escape_string($_POST["codigo_interno_criado"]);

    $SQL = 'INSERT INTO `usuario` (`tipo`,`senha`,`cod_grupo`,`cargo`,`cod_prof`) VALUES ("' . $nome . '","' . $senha . '","' . $codg . '","' . $cargo . '","' . $codi . '");';
    $resultado = $conexao->query($SQL);
    $conexao->close();
    header("Location: index.html");
}
?>