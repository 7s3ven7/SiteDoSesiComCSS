<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_inicio.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="caixa">
        <div class="texto">Crie sua Turma</div>
        <div class="caixa-mini">
            <form method="POST" action="t_turma.php">
                <div class="texto-mini">Nome do grupo</div>
                <input class="caixa-texto" type="text" placeholder="Nome" name="nome_grupo">
                <div class="texto-mini">Quantidade de alunos</div>
                <input class="caixa-texto" type="text" placeholder="Alunos" name="qnt_aluno">
                <input type="submit">
            </form>
            <?php if(isset($_POST['nome_grupo']) and isset($_POST['qnt_aluno'])){
                    $hostname = "127.0.0.1";
                    $name = "root";
                    $password = "root";
                    $DB = "dados";
                    $conexao = new mysqli($hostname, $name, $password, $DB);
                    if ($conexao->connect_errno) {
                        echo "Failes conection: " . $conexao->connect_error;
                        exit();
                    } else
                    {
                        $nome = $conexao->real_escape_string($_POST["nome_grupo"]);
                        $qnt = $conexao->real_escape_string($_POST["qnt_aluno"]);
                        $sql = "SELECT `turma` FROM `turma` WHERE `turma` = '".$nome."'";
                        $resultado_1 = $conexao->query($sql);
                        if($resultado_1->num_rows != 0){
                            echo '<div class="texto-mini">Este nome já esta em uso, tente outro</div>';
                        }else{
                        $SQL = 'INSERT INTO `turma` (`turma`,`quant_alu`) VALUES ("' . $nome . '","' . $qnt . '");';
                        $resultado = $conexao->query($SQL);
                        $conexao->close();
                        //header("Location: t_atividade.php");
                    }
                }}
                ?>
        </div>
</body>

</html>