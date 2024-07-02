<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
</head>
<?php
    $nome_atividade = $_GET['nome_atividade'];
    $nome = $_GET['nome'];
?>

<body>
    <div class="">
        <div class="">Crie sua atividade</div>
        <div class="">
            <form method="POST" action="index.php">
                <div class="">Nome da atividade</div>
                <input class="" type="text" placeholder="Nome" name="nome_atividade">
                <div class="">Grupo da atividade</div>
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
        echo '<select class="" id="">';
        $n = 1;
    while($row = mysqli_fetch_array($select_completo)){
        $grupo = $row['0'];
        echo '<option name="grupo" value="'.$n.'">'.$grupo.'</option>';
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
        <div id="">Conta: <?php echo $nome;?></div>
</body>

</html>