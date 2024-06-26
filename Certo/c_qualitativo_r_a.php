<?php

$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
if ($conexao->connect_errno){
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    exit();
}else{

if(isset($_POST['1'])){
    $v1 = 'V';
} else {
    $v1 = 'F';
}

if(isset($_POST['2'])){
    $v2 = 'V';
} else {
    $v2 = 'F';
}

if(isset($_POST['3'])){
    $v3 = 'V';
} else {
    $v3 = 'F';
}

if(isset($_POST['4'])){
    $v4 = 'V';
} else {
    $v4 = 'F';
}

if(isset($_POST['5'])){
    $v5 = 'V';
} else {
    $v5 = 'F';
}

if(isset($_POST['6'])){
    $v6 = 'V';
} else {
    $v6 = 'F';
}

if(isset($_POST['7'])){
    $v7 = 'V';
} else {
    $v7 = 'F';
}

if(isset($_POST['8'])){
    $v8 = 'V';
} else {
    $v8 = 'F';
}

if(isset($_POST['9'])){
    $v9 = 'V';
} else {
    $v9 = 'F';
}

if(isset($_POST['10'])){
    $v10 = 'V';
} else {
    $v10 = 'F';
}

if(isset($_POST['11'])){
    $v11 = 'V';
} else {
    $v11 = 'F';
}

if(isset($_POST['12'])){
    $v12 = 'V';
} else {
    $v12 = 'F';
}

if(isset($_POST['13'])){
    $v13 = 'V';
} else {
    $v13 = 'F';
}

if(isset($_POST['14'])){
    $v14 = 'V';
} else {
    $v14 = 'F';
}

if(isset($_POST['15'])){
    $v15 = 'V';
} else {
    $v15 = 'F';
}

if(isset($_POST['16'])){
    $v16 = 'V';
} else {
    $v16 = 'F';
}

if(isset($_POST['17'])){
    $v17 = 'V';
} else {
    $v17 = 'F';
}

if(isset($_POST['18'])){
    $v18 = 'V';
} else {
    $v18 = 'F';
}

if(isset($_POST['19'])){
    $v19 = 'V';
} else {
    $v19 = 'F';
}

if(isset($_POST['20'])){
    $v20 = 'V';
} else {
    $v20 = 'F';
}

$SQL = 'INSERT INTO `qualitativo_recebimento_a` (`container_desgas`,`avari_late_d`,`avari_late_e`,`avari_teto`,`avaria_frente`,`sem_lacre`,`adesivo_avariado`,`excesso_altu`,`excesso_d`,`excesso_e`,`excesso_fron`,`painel_avariado`,`sem_cabo_energia`,`sem_lona`,`canhoto_ass`,`volume_correto`,`atraso`,`cod_avariado`,`item_lacrado`,`doca_1`) 
    VALUES ("'.$v1.'","'.$v2.'","'.$v3.'","'.$v4.'","'.$v5.'","'.$v6.'","'.$v7.'","'.$v8.'","'.$v9.'","'.$v10.'","'.$v11.'","'.$v12.'","'.$v13.'","'.$v14.'","'.$v15.'","'.$v16.'","'.$v17.'","'.$v18.'","'.$v19.'","'.$v20.'");';
}

$resultado = $conexao -> query($SQL);

$conexao->close();
header('Location: t_qualitativo_r_a.php', true, 301);
exit();
?>