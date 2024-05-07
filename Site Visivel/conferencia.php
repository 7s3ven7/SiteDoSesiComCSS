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

$v1=$_POST['1']; //cod_inter
$v2=$_POST['2']; //cod_forne
$v3=$_POST['3']; //nome_empresa
$v4=$_POST['4']; //CNPJ_empre
$v5=$_POST['5']; //modelo_container
$v6=$_POST['6']; //navio
$v7=$_POST['7']; //destinatario
$v8=$_POST['8']; //tipo_container
$v9=$_POST['9']; //lacre
$v10=$_POST['10']; //lacre_SIF
$v11=$_POST['11']; //temperatura
$v12=$_POST['12']; //IMO
$v13=$_POST['13']; //n_ONU
$v14=$_POST['14']; //nome_produto
$v15=$_POST['15']; //unidade
$v16=$_POST['16']; //quantidade
$v17=$_POST['17']; //quantidade_unidade
$v17=$_POST['18']; //doca

$SQL = 'INSERT INTO `conferencia` (`cod_inter`,`cod_forne`,`nome_empresa`,`CNPJ_empre`,`modelo_container`,`navio`,`destinatario`,`tipo_container`,`lacre`,`lacre_SIF`,`temperatura`,`IMO`,`n_ONU`,`nome_produto`,`und`,`quant`,`quant_und`,`doca`) 
    VALUES ('.$v1.','.$v2.','.$v3.','.$v4.','.$v5.','.$v6.','.$v7.','.$v8.','.$v9.','.$v10.','.$v11.','.$v12.','.$v13.','.$v14.','.$v15.','.$v16.','.$v17.','.$v18.');';
//Inserir no DB

$resultado = $conexao -> query($SQL);

$conexao -> close();
header("Location: qualitativo.php"); //Envia para a tela de Login ao Cadastrar
}
?>
