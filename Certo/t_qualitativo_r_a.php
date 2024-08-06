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
/*
        $nome = $_GET['nome'];
    function redirect(){
        global $nome;
        if(isset($_GET['nome_atividade'])){
            $nome_atividade = $_GET['nome_atividade'];
            echo $nome.'&nome_atividade='.$nome_atividade;
        }else{
            echo $nome;
        }
    }
*/
    echo '<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="caixa-menu-geral"></div>
    <div class="menu">Menu</div>
    <div class="conta-geral">Aluno - <?php echo $nome;?></div>
    <div class="espaco"></div>
    <details class="details">
        <summary class="sumario">Recebimento</summary>
        <form action="t_nota_r_a.php">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_r_a.php">
            <input class="botao-sumario" type="submit" value="Qualitativo">
        </form>
        <form action="t_quantitativo_a.php">
            <input class="botao-sumario" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Controle</summary>
        <form action="t_docas_r_a.php">
            <input class="botao-sumario" type="submit" value="Controle">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Estoque</summary>
        <form action="t_estoque_a.php">
            <input class="botao-sumario" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Picking</summary>
        <form action="t_picking_a.php">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Expedição</summary>
        <form action="t_nota_e_a.php">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_e_a.php">
            <input class="botao-sumario" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="t_quantitativo_e_a.php">
            <input class="botao-sumario" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Relatórios</summary>
        <form action="t_relatorios_a.php">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>

    <div class="caixa-tela-informacao-geral">
                <form action="t_qualitativo_r_a.php" method="POST">
                    <center><div class="texto-grande-qualitat">
                        Digite o Código do fornecedor
                        <input class="botao-input-qualitat" type="number" name="cod_forne">
                        <br>
                        <input class="botao-qualitat-submit" type="submit">
                        <br>
                        <div class="">
                        </div></center>
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
                <form me-2od="POST" action="t_qualitativo_r_a.php">
                <div class="caixa-qualitat-1">
                    <table class="tabela-qualitat">
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Código do fornecedor:</td>
                            <td class="td-qualitat">'.$row['cod_forne'].'</div></td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Lotes: </div></td>
                            <td class="td-qualitat">'.$row['lote'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Nome da empresa: </div></td>
                            <td class="td-qualitat">'.$row['nome_e'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">CNPJ da empresa: </div></td>
                            <td class="td-qualitat">'.$row['CNPJ_f'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Modelo do container: </div></td>
                            <td class="td-qualitat">'.$row['modelo_contai'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Navio: </div></td>
                            <td class="td-qualitat">'.$row['navio'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Destinatário: </div></td>
                            <td class="td-qualitat">'.$row['CNPJ_f'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Tipo do container: </div></td>
                            <td class="td-qualitat">'.$row['tipo_contai'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Lacre: </div></td>
                            <td class="td-qualitat">'.$row['lacre'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Lacre SIF: </div></td>
                            <td class="td-qualitat">'.$row['lacre_SIF'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Temperatura: </div></td>
                            <td class="td-qualitat">'.$row['temperatura'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">IMO: </div></td>
                            <td class="td-qualitat">'.$row['IMO'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Número ONU: </div></td>
                            <td class="td-qualitat">'.$row['n_ONU'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Nome do produto: </div></td>
                            <td class="td-qualitat">'.$row['nome_p'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Unidades: </td>
                            <td class="td-qualitat">'.$row['und'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Quantidade de produto: </div></td>
                            <td class="td-qualitat">'.$row['quant_prod'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat"><div class="texto-pequeno-qualitat">Quantidade de unidade: </div></td>
                            <td class="td-qualitat">'.$row['quant_und'].'</td>
                        </tr>     
                    </table> 
                    </div>
                    <div class="caixa-qualitat-2">
                    <table class="tabela-qualitat2">
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Container Bem Desgastado: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="1">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Avaria na Lateral Direita: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="2">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Avaria na Lateral Esquerda: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="3">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Avaria no Teto: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="4">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Avaria na Frente: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="5">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Sem Lacre </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="6">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Adesivos Avariados: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="7">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Excesso de Altura: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="8">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Excesso na Direita: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="9">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Excesso na Esquerda: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="10">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Excesso Frontal: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="11">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Painel Avariado: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="12">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Sem Cabo de Energia: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="13">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Sem Lona: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="14">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Canhoto Assinado: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="15">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Volume Correto: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="16">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Atraso: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="17">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Código Avariado: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="18">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Item Lacrado: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="19">
                                </label>
                            </td>
                            <td class="td-qualitat-2"><div class="texto-pequeno-qualitat">Doca 1: </div></td>
                            <td class="td-qualitat-2">
                                <label class="container-qualitat">
                                    <input class="check-qualitat" type="checkbox" name="20">
                                </label>
                            </td>
                        </tr>
                    </table>
                    </div>
                    <input class="botao-qualitat-submit" type="submit" value="Enviar" left=5px name="21">
                </form>
                </center>
            </div>
        </body>
    </html>';}
    }
if(isset($_POST['21'])){
    
        $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
        if ($conexao->connect_errno){
            echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
            exit();
        }else{
            for($i = 1;$i<=20;$i+= 1){
                $numero='v'.$i;
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