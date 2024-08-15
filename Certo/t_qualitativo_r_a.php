<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
        $nome = $_GET['nome'];
        function redirect(){
            global $nome;
            if(isset($_GET['nome_atividade'])){
                $nome_atividade = $_GET['nome_atividade'];
                echo $nome.'&nome_atividade='.$nome_atividade;
            }else{
                echo $nome;
            }
<<<<<<< HEAD
        }
        function exibir(){
            global $conexao;
            $sql="SELECT * FROM `quantitativo_r_p` WHERE `cod_forne` = '".$_POST['cod_forne']."';";
            $resultado = $conexao->query($sql);
            if($resultado->num_rows != 0){ //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
                for($i=1;$i<=$resultado->num_rows;$i++){
                    $row = $resultado -> fetch_array();
                }
            } else {
                exit();
            }
=======
        }?>
    <!DOCTYPE html>

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
    <div class='espaco'></div>
    <details class='details'>
        <summary class="sumario">Recebimento</summary>
        <form method="POST" action="t_nota_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo">
        </form>
        <form method="POST" action="t_quantitativo_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Controle</summary>
        <form method="POST" action="t_docas_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Controle">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Estoque</summary>
        <form method="POST" action="t_estoque_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Picking</summary>
        <form method="POST" action="t_picking_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Expedição</summary>
        <form method="POST" action="t_nota_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo (WIP)">
        </form>
        <form method="POST" action="t_quantitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Relatórios</summary>
        <form method="POST" action="t_relatorios_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>

    <div class="caixa-tela-informacao-geral">
                <form action="t_qualitativo_r_a.php" method="POST">
                    <center>
                        <div class="dist-qualitat-r-a">
                            <div class="texto-grande-qualitat-r-a">
                                Digite o Código do fornecedor
                                <input class="botao-input-qualitat-r-a" type="number" name="cod_forne">
                                <br>
                                <input class="botao-qualitat-submit-r-a" type="submit">
                                <br>
                            </div>
                        </div>
                    </center>
                </form>
                <?php
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
>>>>>>> 021e8dfc8eea47b09c1bb052831fc9f44c0a2564
                echo '
                <form method="POST" action="t_qualitativo_r_a.php">
                <div class="caixa-qualitat-1-r-a">
                    <table class="tabela-qualitat-r-a">
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Código do fornecedor:</td>
                            <td class="td-qualitat-r-a">'.$row['cod_forne'].'</div></td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Lotes: </div></td>
                            <td class="td-qualitat-r-a">'.$row['lote'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Nome da empresa: </div></td>
                            <td class="td-qualitat-r-a">'.$row['nome_e'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">CNPJ da empresa: </div></td>
                            <td class="td-qualitat-r-a">'.$row['CNPJ_f'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Modelo do container: </div></td>
                            <td class="td-qualitat-r-a">'.$row['modelo_contai'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Navio: </div></td>
                            <td class="td-qualitat-r-a">'.$row['navio'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Destinatário: </div></td>
                            <td class="td-qualitat-r-a">'.$row['CNPJ_f'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Tipo do container: </div></td>
                            <td class="td-qualitat-r-a">'.$row['tipo_contai'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Lacre: </div></td>
                            <td class="td-qualitat-r-a">'.$row['lacre'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Lacre SIF: </div></td>
                            <td class="td-qualitat-r-a">'.$row['lacre_SIF'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Temperatura: </div></td>
                            <td class="td-qualitat-r-a">'.$row['temperatura'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">IMO: </div></td>
                            <td class="td-qualitat-r-a">'.$row['IMO'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Número ONU: </div></td>
                            <td class="td-qualitat-r-a">'.$row['n_ONU'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Nome do produto: </div></td>
                            <td class="td-qualitat-r-a">'.$row['nome_p'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Unidades: </td>
                            <td class="td-qualitat-r-a">'.$row['und'].'</td>
                            </tr>
                            <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Quantidade de produto: </div></td>
                            <td class="td-qualitat-r-a">'.$row['quant_prod'].'</td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-r-a"><div class="texto-pequeno-qualitat-r-a">Quantidade de unidade: </div></td>
                            <td class="td-qualitat-r-a">'.$row['quant_und'].'</td>
                        </tr>     
                    </table> 
                    </div>
                    <div class="caixa-qualitat-2-r-a">
                    <table class="tabela-qualitat-2-r-a">
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Container Bem Desgastado: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="1">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Avaria na Lateral Direita: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="2">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Avaria na Lateral Esquerda: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="3">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Avaria no Teto: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="4">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Avaria na Frente: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="5">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Sem Lacre </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="6">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Adesivos Avariados: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="7">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Excesso de Altura: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="8">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Excesso na Direita: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="9">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Excesso na Esquerda: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="10">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Excesso Frontal: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="11">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Painel Avariado: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="12">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Sem Cabo de Energia: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="13">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Sem Lona: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="14">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Canhoto Assinado: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="15">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Volume Correto: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="16">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Atraso: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="17">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Código Avariado: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="18">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Item Lacrado: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="19">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-qualitat-2-r-a"><div class="texto-pequeno-qualitat-r-a">Doca 1: </div></td>
                            <td class="td-qualitat-2-r-a">
                                <label class="caixa-qualitat-3-r-a">
                                    <input class="check-qualitat-r-a" type="checkbox" name="20">
                                </label>
                            </td>
                        </tr>
                    </table>
                    </div>
                    <div class="texto-grande-qualitat-r-a">
                    <input class="botao-qualitat-submit-2-r-a" type="submit" value="Enviar" left=5px name="21">
                    </div>
                </form>
                </center>
            </div>
            </td>
</form>
</body>

</html>';
        }
        ?>

<body>
    <div class="caixa-menu-geral"></div>
    <div class="menu">Menu</div>
    <div class="conta-geral">Aluno - <?php echo $nome;?></div>
    <div class='espaco'></div>
    <details class='details'>
        <summary class="sumario">Recebimento</summary>
        <form method="POST" action="t_nota_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo">
        </form>
        <form method="POST" action="t_quantitativo_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Quantitativo">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Controle</summary>
        <form method="POST" action="t_docas_r_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Controle">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Estoque</summary>
        <form method="POST" action="t_estoque_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Estoque">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Picking</summary>
        <form method="POST" action="t_picking_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Expedição</summary>
        <form method="POST" action="t_nota_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Nota (WIP)">
        </form>
        <form method="POST" action="t_qualitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Qualitativo (WIP)">
        </form>
        <form method="POST" action="t_quantitativo_e_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="Quantitativo (WIP)">
        </form>
    </details>
    <details class="details">
        <summary class="sumario">Relatórios</summary>
        <form method="POST" action="t_relatorios_a.php?nome=<?php redirect()?>">
            <input class="botao-sumario" type="submit" value="WIP">
        </form>
    </details>

    <div class="caixa-tela-informacao-geral">
        <form action="t_qualitativo_r_a.php" method="POST">
            <center>
                <div class="texto-grande-qualitat-r-a">
                    Digite o Código do fornecedor
                    <input class="botao-input-qualitat" type="number" name="cod_forne">
                    <br>
                    <input class="botao-qualitat-submit-r-a" type="submit">
                    <br>
                    <div class="">
                    </div>
            </center>
        </form>
        <?php
    $hostname = "127.0.0.1";
    $name = "root";
    $password = "root";
    $DB = "dados";

    $conexao = new mysqli($hostname, $name, $password, $DB);
    
        if(isset($_POST['cod_forne'])){       
            exibir();     
        }

        if(isset($_POST['21'])){

if ($conexao->connect_errno){
echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
exit();
}else{
for($i = 1;$i<=20;$i+= 1){
    $numero='v' .$i;
    if(isset($_POST[$i])){
    $valor='$'.$numero;
    $$valor='V';
    echo $valor.'='.$$valor.' <br>';
    $numero='';

    }else {
    $valor ='$'.$numero;
    $$valor='F';
    $numero='' ;
    echo $valor.' = '.$$valor.'<br>';
    }
    }
    $SQL = 'INSERT INTO `qualitativo_r_a`
    (`container_desgas`,`avari_late_d`,`avari_late_e`,`avari_teto`,`avari_frente`,`sem_lacre`,`adesivo_avariado`,`excesso_altu`,`excesso_d`,`excesso_e`,`excesso_fron`,`painel_avariado`,`sem_cabo_energia`,`sem_lona`,`canhoto_ass`,`volume_correto`,`atraso`,`cod_avariado`,`item_lacrado`,`doca_1`,
    `cod_forne`)
    VALUES
    ("'.$$valor.'","'.$$valor.'","'.$$valor.'","'.$v4.'","'.$v5.'","'.$v6.'","'.$v7.'","'.$v8.'","'.$v9.'","'.$v10.'","'.$v11.'","'.$v12.'","'.$v13.'","'.$v14.'","'.$v15.'","'.$v16.'","'.$v17.'","'.$v18.'","'.$v19.'","'.$v20.'","'.$_SESSION['cod_forne'].'");';
    $resultado = $conexao -> query($SQL);

    $conexao->close();
    exit();
    }
    }

    ?>