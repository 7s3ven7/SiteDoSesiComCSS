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
        <div class="texto">Crie sua atividade</div>
        <div class="caixa-mini">
            <form method="POST" action="index.php">
                <div class="texto-mini">Nome da atividade</div>
                <input class="caixa-texto" type="text" placeholder="Nome" name="nome_atividade">
                <div class="texto-mini">Grupo da atividade</div>
                <?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root"; 
$DB = "dados";
$conexao = new mysqli($hostname, $name, $password, $DB);
if ($conexao->connect_errno) {
	echo "Failes conection :" . $conexao->connect_error;
	exit();
}else{
    $select = 'SELECT DISTINCT `cod_grupo` FROM `usuario`;';
    $select_completo = $conexao->query($select);
    if($select_completo->num_rows != 0){
        echo '<select class="caixa-texto-2" id="turmas">';
        $n = 1;
    while($row = mysqli_fetch_array($select_completo)){
        $grupo = $row['0'];
        echo '<option value="'.$n.'">'.$grupo.'</option>';
        $n += 1;
    }
    echo '<options value"primeira_opcao">server</option>';
    echo '</select>';
    }
    if(isset($_POST['nome_atividade']) and isset($_POST['grupo_atividade'])){
        $nome_atividade = $_POST['nome_atividade'];
        $grupo_atividade = $_POST['grupo_atividade'];
            header('location:t_p.php?nome='.$nome.'&nome_atividade='.$nome_atividade.'&grupo_atividade='.$grupo_atividade.'');
    }}
?>
        </div>
</body>

</html>