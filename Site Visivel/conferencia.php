<?php
$hostname = "127.0.0.1";
$name ="root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname,$name,$password,$DB);//Tenta conexão com o DB

/*if(isset($_POST['nome da caixa'])){
    $containerDesgastado = 1;
} else {
    $containerDesgastado = 0;
}
*/
if($conexao -> connect_errno){
    echo "Failed conection: " .$conexao -> connect_error; //erro caso não consiga conectar ao DB
    exit();
}
else{

$v1=$_POST['1']; //nome_m
$v2=$_POST['2']; //n_empresa
$v3=$_POST['3']; //modelo_v
$v4=$_POST['4']; //eixos
$v5=$_POST['5']; //PBT
$v6=$_POST['6']; //CNPJ_empre
$v7=$_POST['7']; //placa_veiculo
$v8=$_POST['8']; //modelo_container
$v9=$_POST['9']; //navio
$v10=$_POST['10']; //destinatario
$v11=$_POST['11']; //tipo_container
$v12=$_POST['12']; //lacre
$v13=$_POST['13']; //lacre_SIF
$v14=$_POST['14']; //temperatura
$v15=$_POST['15']; //IMO
$v16=$_POST['16']; //n_ONU

$SQL = 'INSERT INTO `conferencia` (`nome_m`,`n_empresa`,`modelo_v`,`eixos`,`PBT`,`CNPJ_empre`,`placa_veiculo`,`modelo_container`,`navio`,`destinatario`,`tipo_container`,`lacre`,`lacre_SIF`,`temperatura`,`IMO`,`n_ONU`) 
    VALUES ('.$v1.','.$v2.','.$v3.','.$v4.','.$v5.','.$v6.','.$v7.','.$v8.','.$v9.','.$v10.','.$v11.','.$v12.','.$v13.','.$v14.','.$v15.','.$v16.');';
//Inserir no DB

$resultado = $conexao -> query($SQL);

$conexao -> close();
header("Location: qualitativo.php"); //Envia para a tela de Login ao Cadastrar
}
?>
