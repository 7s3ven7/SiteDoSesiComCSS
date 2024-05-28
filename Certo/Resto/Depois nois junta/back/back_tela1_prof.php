<?php
$hostname = "127.0.0.1";
$name ="root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname,$name,$password,$DB);//Tenta conexão com DB

if($conexao -> connect_errno){
    echo "Failed conection: " .$conexao -> connect_error; //erro caso não consiga conectar ao DB
    exit();
}
else

$SQL = "SELECT * 
            FROM `usuario`";

$resultado = $conexao -> query($SQL); //Faz a pesquisa dos dados no DB

    for($i=1;$i<=$resultado->num_rows;$i++)
        {
        $row = $resultado -> fetch_array();
        echo 'User: '. $row['tipo'].' ';
        echo 'Senha: '. $row['senha'].' ';
        echo 'Cargo: '. $row['cargo'].' ';
        echo '<br>';
    }
		$conexao -> close();
		exit();
?>