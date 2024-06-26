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
    $codp = $conexao->real_escape_string($_POST["codigo_interno_criado"]);

    if($senha == $codi){
        $SQL = 'INSERT INTO `usuario` (`nome_u`,`tipo_u`,`senha`,`cod_grupo`,`cargo_u`,`cod_prof`) VALUES ("' . $nome . '","Professor","' . $senha . '","' . $codg . '","' . $cargo . '","' . $codi . '");';
        $resultado = $conexao->query($SQL);
        $conexao->close();
        header("Location: index.php");
    }else{

    $SQL = 'INSERT INTO `usuario` (`nome_u`,`tipo_u`,`senha`,`cod_grupo`,`cargo_u`,`cod_prof`) VALUES ("' . $nome . '","Aluno","' . $senha . '","' . $codg . '","' . $cargo . '","' . $codi . '");';
    $resultado = $conexao->query($SQL);
    $conexao->close();
    header("Location: index.php");
}}
?>