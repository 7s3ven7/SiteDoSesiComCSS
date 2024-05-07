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

$SQL = 'INSERT INTO `conferencia` (`nome_m`,`n_empresa`,`modelo_v`,`eixos`,`PBT`,`CNPJ_empre`,`placa_veiculo`,`modelo_container`,`navio`,`destinatario`,`tipo_container`,`lacre`,`lacre_SIF`,`temperatura`,`IMO`,`n_ONU`, `containe*`) 
    VALUES ("1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1", '".$containerDesgastado."');';
//Inserir no DB

$resultado = $conexao -> query($SQL);

$conexao -> close();
header("Location: index.php"); //Envia para a tela de Login ao Cadastrar
}
?>
