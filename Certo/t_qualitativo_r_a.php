<?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
if ($conexao->connect_errno) {
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    exit();
} else{
echo '<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html";charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
</head>

<body>
    <div id="tipo">Aluno</div>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="t_nota_r_a.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_r_a.php">
            <input class="details-small" type="submit" value="Qualitativo">
        </form>
        <form action="t_quantitativo_a.php">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Controle</summary>
        <form action="t_docas_r_a.php">
            <input class="details-small" type="submit" value="Controle">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Estoque</summary>
        <form action="t_estoque_a.php">
            <input class="details-small" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Picking</summary>
        <form action="t_picking_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="t_nota_e_a.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_e_a.php">
            <input class="details-small" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="t_quantitativo_e_a.php">
            <input class="details-small" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Relatórios</summary>
        <form action="t_relatorios_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <div class="menu">Menu</div>
<div class="caixa">
        <form action="t_qualitativo_r_a.php" method="POST">
            <div class="">
                <div class="">Digite o Código do fornecedor</div>
                <input class="" type="number" name="cod_forne">
                <input class="" type="submit">
                <div class="">
        </form>';
        if(isset($_POST['cod_forne'])){            
            $v1 = $_POST['cod_forne'];
			$sql="SELECT * FROM `quantitativo_r_p` WHERE `cod_forne` = '".$v1."';";
			$resultado = $conexao->query($sql);
            if($resultado->num_rows != 0) //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
            {
                for($i=1;$i<=$resultado->num_rows;$i++){
                    $row = $resultado -> fetch_array();
                }
            } else {
                $conexao -> close();
                header("Location: t_qualitativo_r_a.php");
                exit();
            }
echo '
        <form method="POST" action="t_qualitativo_r_a.php">
            <table class="tabela-2">
                <tr>
                    <td><div class="texto2">Código do fornecedor:</td>
                    <td>'.$row['cod_forne'].'</div></td>
                    <td><div class="texto2">Lotes: </div></td>
                    <td>'.$row['lote'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Nome da empresa: </div></td>
                    <td>'.$row['nome_e'].'</td>
                    <td><div class="texto2">CNPJ da empresa: </div></td>
                    <td>'.$row['CNPJ_e'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Modelo do container: </div></td>
                    <td>'.$row['modelo_contai'].'</td>
                    <td><div class="texto2">Navio: </div></td>
                    <td>'.$row['navio'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Destinatário: </div></td>
                    <td>'.$row['CNPJ_f'].'</td>
                    <td><div class="texto2">Tipo do container: </div></td>
                    <td>'.$row['tipo_contai'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Lacre: </div></td>
                    <td>'.$row['lacre'].'</td>
                    <td><div class="texto2">Lacre SIF: </div></td>
                    <td>'.$row['lacre_SIF'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Temperatura: </div></td>
                    <td>'.$row['temperatura'].'</td>
                    <td><div class="texto2">IMO: </div></td>
                    <td>'.$row['IMO'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Número ONU: </div></td>
                    <td>'.$row['n_ONU'].'</td>
                    <td><div class="texto2">Nome do produto: </div></td>
                    <td>'.$row['nome_p'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Unidades: </td>
                    <td>'.$row['und'].'</td>
                    <td><div class="texto2">Quantidade de produto: </div></td>
                    <td>'.$row['quant_prod'].'</td>
                </tr>
                <tr>
                    <td><div class="texto2">Quantidade do unidade: </div></td>
                    <td>'.$row['quant_und'].'</td>
                </tr>         
                <tr>
                    <td>Container Bem Desgastado: </td>
                    <td><input class="check" type="checkbox" name="1"</td>
                    <td>Avaria na Lateral Direita: </td>
                    <td><input class="check" type="checkbox" name="2"</td>
                </tr>
                    <tr>
                    <td>Avaria na Lateral Esquerda: </td>
                    <td><input class="check" type="checkbox" name="3"</td>
                    <td>Avaria no Teto: </td>
                    <td><input class="check" type="checkbox" name="4"</td>
                </tr>
                <tr>
                    <td>Avaria na Frente: </td>
                    <td><input class="check" type="checkbox" name="5"</td>
                    <td>Sem Lacre </td>
                    <td><input class="check" type="checkbox" name="6"</td>
                </tr>
                <tr>
                    <td>Adesivos Avariados: </td>
                    <td><input class="check" type="checkbox" name="7"</td>
                    <td>Excesso de Altura: </td>
                    <td><input class="check" type="checkbox" name="8"</td>
                </tr>
                <tr>
                    <td>Excesso na Direita: </td>
                    <td><input class="check" type="checkbox" name="9"</td>
                    <td>Excesso na Esquerda: </td>
                    <td><input class="check" type="checkbox" name="10"</td>
                </tr>
                <tr>
                    <td>Excesso Frontal: </td>
                    <td><input class="check" type="checkbox" name="11"</td>
                    <td>Painel Avariado: </td>
                    <td><input class="check" type="checkbox" name="12"</td>
                </tr>
                <tr>
                    <td>Sem Cabo de Energia: </td>
                    <td><input class="check" type="checkbox" name="13"</td>
                    <td>Sem Lona: </td>
                    <td><input class="check" type="checkbox" name="14"</td>
                </tr>
                <tr>
                    <td>Canhoto Assinado: </td>
                    <td><input class="check" type="checkbox" name="15"</td>
                    <td>Volume Correto: </td>
                    <td><input class="check" type="checkbox" name="16"</td>
                </tr>
                <tr>
                    <td>Atraso: </td>
                    <td><input class="check" type="checkbox" name="17"</td>
                    <td>Código Avariado: </td>
                    <td><input class="check" type="checkbox" name="18"</td>
                </tr>
                <tr>
                    <td>Item Lacrado: </td>
                    <td><input class="check" type="checkbox" name="19"</td>
                    <td>Doca 1: </td>
                    <td><input class="check" type="checkbox" name="20"</td>
                </tr>

            </table>
            <input class="botao-qualitat" type="submit" value="Enviar" left=5px>
        </form>
    </div>
</body>
</html>';}}
?>
<?php

if(isset($_POST['cod_forne'])){
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

$SQL = 'INSERT INTO `qualitativo_r_a` (`container_desgas`,`avari_late_d`,`avari_late_e`,`avari_teto`,`avari_frente`,`sem_lacre`,`adesivo_avariado`,`excesso_altu`,`excesso_d`,`excesso_e`,`excesso_fron`,`painel_avariado`,`sem_cabo_energia`,`sem_lona`,`canhoto_ass`,`volume_correto`,`atraso`,`cod_avariado`,`item_lacrado`,`doca_1`) 
    VALUES ("'.$v1.'","'.$v2.'","'.$v3.'","'.$v4.'","'.$v5.'","'.$v6.'","'.$v7.'","'.$v8.'","'.$v9.'","'.$v10.'","'.$v11.'","'.$v12.'","'.$v13.'","'.$v14.'","'.$v15.'","'.$v16.'","'.$v17.'","'.$v18.'","'.$v19.'","'.$v20.'");';
}

$resultado = $conexao -> query($SQL);

$conexao->close();
exit();
}
?>