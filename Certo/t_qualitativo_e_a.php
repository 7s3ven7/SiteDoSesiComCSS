<!DOCTYPE html>

<head></head>

<body><?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
if ($conexao->connect_errno) {
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    exit();
} else {
    $n_pedido = 1;
    $SQL = 'SELECT * FROM `quantitativo_e_p` 
    WHERE `id_quanti_e` = '.$n_pedido.';';
    $resultado = $conexao->query($SQL); //Envia para a tela de Login ao Cadastrar
    if($resultado->num_rows != 0) //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
	{
		for($i=1;$i<=$resultado->num_rows;$i++){
			$row = $resultado -> fetch_array();
		}
	} else {
		$conexao -> close();
		header("Location: t_qualitativo_e_a.php");
		exit();
	}
}
echo '<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html";charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
</head>

<body>
    <div id="">Aluno</div>
    <div class=""></div>
    <details class="">
        <summary class="">Recebimento</summary>
        <form action="t_nota_r_a.php">
            <input class="" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_r_a.php">
            <input class="" type="submit" value="Qualitativo">
        </form>
        <form action="t_quantitativo_a.php">
            <input class="" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="">
        <summary class="">Controle</summary>
        <form action="t_docas_r_a.php">
            <input class="" type="submit" value="Controle">
        </form>
    </details>
    <details class="">
        <summary class="">Estoque</summary>
        <form action="t_estoque_a.php">
            <input class="" type="submit" value="Estoque">
        </form>
    </details>
    <details class="">
        <summary class="">Picking</summary>
        <form action="t_picking_a.php">
            <input class="" type="submit" value="WIP">
        </form>
    </details>
    <details class="">
        <summary class="">Expedição</summary>
        <form action="t_nota_e_a.php">
            <input class="" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_e_a.php">
            <input class="" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="t_quantitativo_e_a.php">
            <input class="" type="submit" value="Quantitativo (WIP)">
        </form>

    </details>
    <details class="">
        <summary class="">Relatórios</summary>
        <form action="t_a.php">
            <input class="" type="submit" value="WIP">
        </form>
        <form action="t_a.php">
            <input class="" type="submit" value="WIP">
        </form>
    </details>

    <div class="">Menu</div>
<div class="">
        <form method="POST" action="c_qualitativo_r_a.php">
            <table class="">
                <tr>
                    <td><div class="">Código Interno:</td>
                    <td><div class="">'.$row['cod_inter'].'</div></td>
                    <td><div class="">Código do fornecedor:</td>
                    <td><div class="">'.$row['cod_forne'].'</div></td>
                </tr>
                <tr>
                    <td><div class="">Nome da empresa: </div></td>
                    <td>'.$row['nome_empre'].'</td>
                    <td><div class="">CNPJ da empresa: </div></td>
                    <td>'.$row['CNPJ_empre'].'</td>
                </tr>
                <tr>
                    <td><div class="">Modelo do container: </div></td>
                    <td>'.$row['modelo_conta'].'</td>
                    <td><div class="">Navio: </div></td>
                    <td>'.$row['navio'].'</td>
                </tr>
                <tr>
                    <td><div class="">Destinatário: </div></td>
                    <td>'.$row['CNPJ_dest'].'</td>
                    <td><div class="">Tipo do container: </div></td>
                    <td>'.$row['tipo_container'].'</td>
                </tr>
                <tr>
                    <td><div class="">Lacre: </div></td>
                    <td>'.$row['lacre'].'</td>
                    <td><div class="">Lacre SIF: </div></td>
                    <td>'.$row['lacre_SIF'].'</td>
                </tr>
                <tr>
                    <td><div class="">Temperatura: </div></td>
                    <td>'.$row['temperatura'].'</td>
                    <td><div class="">IMO: </div></td>
                    <td>'.$row['IMO'].'</td>
                </tr>
                <tr>
                    <td><div class="">Número ONU: </div></td>
                    <td>'.$row['n_ONU'].'</td>
                    <td><div class="">Nome do produto: </div></td>
                    <td>'.$row['nome_prod'].'</td>
                </tr>
                <tr>
                    <td><div class="">Unidades: </td>
                    <td>'.$row['und'].'</td>
                    <td><div class="">Quantidade de produto: </div></td>
                    <td>'.$row['quant_produto'].'</td>
                </tr>
                <tr>
                    <td><div class="">Quantidade do unidade: </div></td>
                    <td>'.$row['quant_und'].'</td>
                    <td><div class="">Lotes: </div></td>
                    <td>'.$row['lote'].'</td>
                </tr>
                <tr>
                    <td><div class="">CNPJ do destinatário: </div></td>
                    <td>'.$row['CNPJ_dest'].'</td>
                    <td><div class="">Número do pedido: </div></td>
                    <td>'.$row['n_nota'].'</td>
                </tr>          
                <tr>
                    <td>Container Bem Desgastado: </td>
                    <td><input class="" type="checkbox" name="1"</td>
                    <td>Avaria na Lateral Direita: </td>
                    <td><input class="" type="checkbox" name="2"</td>
                </tr>
                    <tr>
                    <td>Avaria na Lateral Esquerda: </td>
                    <td><input class="" type="checkbox" name="3"</td>
                    <td>Avaria no Teto: </td>
                    <td><input class="" type="checkbox" name="4"</td>
                </tr>
                <tr>
                    <td>Avaria na Frente: </td>
                    <td><input class="" type="checkbox" name="5"</td>
                    <td>Sem Lacre </td>
                    <td><input class="" type="checkbox" name="6"</td>
                </tr>
                <tr>
                    <td>Adesivos Avariados: </td>
                    <td><input class="" type="checkbox" name="7"</td>
                    <td>Excesso de Altura: </td>
                    <td><input class="" type="checkbox" name="8"</td>
                </tr>
                <tr>
                    <td>Excesso na Direita: </td>
                    <td><input class="" type="checkbox" name="9"</td>
                    <td>Excesso na Esquerda: </td>
                    <td><input class="" type="checkbox" name="10"</td>
                </tr>
                <tr>
                    <td>Excesso Frontal: </td>
                    <td><input class="" type="checkbox" name="11"</td>
                    <td>Painel Avariado: </td>
                    <td><input class="" type="checkbox" name="12"</td>
                </tr>
                <tr>
                    <td>Sem Cabo de Energia: </td>
                    <td><input class="" type="checkbox" name="13"</td>
                    <td>Sem Lona: </td>
                    <td><input class="" type="checkbox" name="14"</td>
                </tr>
                <tr>
                    <td>Canhoto Assinado: </td>
                    <td><input class="" type="checkbox" name="15"</td>
                    <td>Volume Correto: </td>
                    <td><input class="" type="checkbox" name="16"</td>
                </tr>
                <tr>
                    <td>Atraso: </td>
                    <td><input class="" type="checkbox" name="17"</td>
                    <td>Código Avariado: </td>
                    <td><input class="" type="checkbox" name="18"</td>
                </tr>
                <tr>
                    <td>Item Lacrado: </td>
                    <td><input class="" type="checkbox" name="19"</td>
                </tr>

            </table>
            <input class="" type="submit" value="Enviar" left=5px>
        </form>
    </div>
</body>
</html>';
?>
    <?php

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

if(isset($_POST['18'])){
    $v18 = 'V';
} else {
    $v18 = 'F';
}

if(isset($_POST['20'])){
    $v20 = 'V';
} else {
    $v20 = 'F';
}

$SQL = 'INSERT INTO `qualitativo_recebimento_a` (`container_desgas`,`avari_late_d`,`avari_late_e`,`avari_teto`,`avaria_frente`,`adesivo_avariado`,`excesso_altu`,`excesso_d`,`excesso_e`,`excesso_fron`,`painel_avariado`,`sem_cabo_energia`,`sem_lona`,`canhoto_ass`,`volume_correto`,`cod_avariado`,`doca_2`) 
    VALUES ("'.$v1.'","'.$v2.'","'.$v3.'","'.$v4.'","'.$v5.'","'.$v7.'","'.$v8.'","'.$v9.'","'.$v10.'","'.$v11.'","'.$v12.'","'.$v13.'","'.$v14.'","'.$v15.'","'.$v16.'","'.$v18.'","'.$v20.'");';

$resultado = $conexao -> query($SQL);

$conexao->close();
header('Location: t_qualitativo_e_a.php', true, 301);
exit();
?>