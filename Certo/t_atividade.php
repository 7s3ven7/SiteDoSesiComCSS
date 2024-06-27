<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_inicio.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php
$nome = $_GET['nome'];?>

<body>
    <div class="caixa-mini-atividade-toda">
        <div class="caixa-mini-atividade">
            <form method="POST" action="t_atividade.php?nome=<?php echo $nome;?>">
                <div class="texto-atividade">Criação de atividades!</div>
                <div class="texto-atividade">Selecione o nome da sua atividade!</div>
                <input class="caixa-texto" type="text" placeholder="nome" name="nome_atividade">
                <div class="texto-atividade">Selecione para qual grupo será a atividade!</div>
                <input class="botao" type="submit" value="Logar">
        </div>
</body>

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
}else{
    $select = 'SELECT `turma` FROM `turma`;';
    $select_completo = $conexao->query($select);
    if($select_completo->num_rows != 0){
        echo '<select id="turmas">';
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