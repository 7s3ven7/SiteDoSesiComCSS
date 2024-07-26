<?php
session_start();
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";
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
                <form action="t_relatorios_a.php">
                    <input class="" type="submit" value="WIP">
                </form>
            </details>
            <div class="">Menu</div>
            <div class="">
                <form action="t_qualitativo_r_a.php" method="POST">
                    <div class="">
                        <div class="">Digite o Código do fornecedor</div>
                        <input class="" type="number" name="cod_forne">
                        <input class="" type="submit">
                        <div class="">
                </form>';
                if(isset($_POST['cod_forne'])){            
                    $v1 = $_POST['cod_forne'];
                    $_SESSION['cod_forne'] = $v1;
                    $sql="SELECT * FROM `quantitativo_r_p` WHERE `cod_forne` = '".$v1."';";
                    $resultado = $conexao->query($sql);
                    if($resultado->num_rows != 0){ //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
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
                    <table class="">
                        <tr>
                            <td><div class="">Código do fornecedor:</td>
                            <td>'.$row['cod_forne'].'</div></td>
                            <td><div class="">Lotes: </div></td>
                            <td>'.$row['lote'].'</td>
                        </tr>
                        <tr>
                            <td><div class="">Nome da empresa: </div></td>
                            <td>'.$row['nome_e'].'</td>
                            <td><div class="">CNPJ da empresa: </div></td>
                            <td>'.$row['CNPJ_e'].'</td>
                        </tr>
                        <tr>
                            <td><div class="">Modelo do container: </div></td>
                            <td>'.$row['modelo_contai'].'</td>
                            <td><div class="">Navio: </div></td>
                            <td>'.$row['navio'].'</td>
                        </tr>
                        <tr>
                            <td><div class="">Destinatário: </div></td>
                            <td>'.$row['CNPJ_f'].'</td>
                            <td><div class="">Tipo do container: </div></td>
                            <td>'.$row['tipo_contai'].'</td>
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
                            <td>'.$row['nome_p'].'</td>
                        </tr>
                        <tr>
                            <td><div class="">Unidades: </td>
                            <td>'.$row['und'].'</td>
                            <td><div class="">Quantidade de produto: </div></td>
                            <td>'.$row['quant_prod'].'</td>
                        </tr>
                        <tr>
                            <td><div class="">Quantidade do unidade: </div></td>
                            <td>'.$row['quant_und'].'</td>
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
                            <td>Doca 1: </td>
                            <td><input class="" type="checkbox" name="20"</td>
                        </tr>
                    </table>
                    <input class="" type="submit" value="Enviar" left=5px name="21">
                </form>
            </div>
        </body>
    </html>';}
    }
if(isset($_POST['21'])){
    
if(isset($_POST['1'])){
    $v1 = 'V';
} else {
    $v1 = 'F';
}
        $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
        if ($conexao->connect_errno){
            echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
            exit();
        }else{
            for($i = 1;$i<=20;$i+= 1){
                $numero='v' .$i;
                    if(isset($_POST[$i])){
                    $valor ='$'.$numero;
                    $$valor='V';
                    echo $valor.' = '.$$valor.'<br>';
                    $numero='';
                    }else { 
                        $valor ='$'.$numero;
                        $$valor='F';
                        $numero='' ;
                        echo $valor.' = '.$$valor.'<br>';
                    }
            }

        $SQL = 'INSERT INTO `qualitativo_r_a` (`container_desgas`,`avari_late_d`,`avari_late_e`,`avari_teto`,`avari_frente`,`sem_lacre`,`adesivo_avariado`,`excesso_altu`,`excesso_d`,`excesso_e`,`excesso_fron`,`painel_avariado`,`sem_cabo_energia`,`sem_lona`,`canhoto_ass`,`volume_correto`,`atraso`,`cod_avariado`,`item_lacrado`,`doca_1`, `cod_forne`) 
        VALUES ("'.$v1.'","'.$v2.'","'.$v3.'","'.$v4.'","'.$v5.'","'.$v6.'","'.$v7.'","'.$v8.'","'.$v9.'","'.$v10.'","'.$v11.'","'.$v12.'","'.$v13.'","'.$v14.'","'.$v15.'","'.$v16.'","'.$v17.'","'.$v18.'","'.$v19.'","'.$v20.'","'.$_SESSION['cod_forne'].'");';
        $_SESSION['doca'] = $v20;
        $resultado = $conexao -> query($SQL);

        $conexao->close();
        exit();
    }
    }
    
?>