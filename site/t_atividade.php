<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
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
    }
        ?>

<body>

    <body>
        <div class='caixa-menu-geral'>
            <div class='espaco'></div>
            <details>
                <summary>Criações</summary>
                <form method='POST' action='t_turma.php?nome=<?php redirect()?>'>
                    <input class='botao-sumario' type='submit' value='Turmas'>
                </form>
                <form method='POST' action='t_atividade.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Atividade'>
                </form>
            </details>
            <details>
                <summary>Cadastros</summary>
                <form method='POST' action='t_fornecedor_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Fornecedor'>
                </form>
                <form method='POST' action='t_empresa_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Empresa'>
                </form>
                <details>
                    <summary>Cliente</summary>
                    <form method='POST' action='t_cliente_p.php?nome=<?php redirect()?>'>
                        <input class=' botao-sumario' type='submit' value='Cadastro'>
                    </form>
                    <form method='POST' action='t_pedido_p.php?nome=<?php redirect()?>'>
                        <input class=' botao-sumario' type='submit' value='Pedido'>
                    </form>
                </details>
            </details>
            <details>
                <summary>Produto</summary>
                <form method='POST' action='t_produto_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Cadastro'>
                </form>
            </details>
            <details>
                <summary>Recebimento</summary>
                <form method='POST' action='t_quantitativo_r_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Quantitativo'>
                </form>
                <form method='POST' action='t_nota_r_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
                </form>
            </details>
            <details>
                <summary>Expedição</summary>
                <form method='POST' action='t_quantitativo_e_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Quantitativo'>
                </form>
                <form method='POST' action='t_nota_e_p.php?nome=<?php redirect()?>'>
                    <input class=' botao-sumario' type='submit' value='Nota Fiscal'>
                </form>
            </details>
        </div>
        <div class="menu">Menu</div>
        <div class="caixa-tela-informacao-geral">
            <div class="caixa-esquerda-turma">
                <div class="texto-grande-turma">Crie sua Atividade</div>
                <div class="caixa-esquerda-turma-dentro">
                    <form method="POST" action="t_atividade.php?nome=<?php redirect()?>">
                        <div class="texto-cinza-turma">Nome da Atividade:</div>
                        <input class="botao-turma-input" type="text" placeholder="atividade" name="nome_atividade">
                        <div class="texto-cinza-turma">Turma destinada: </div>
                        <input class="botao-turma-input" type="text" placeholder="turma" name="turma_destinada"
                            list="turmas">
                        <div class="texto-cinza-turma">Data máxida de entrega: </div>
                        <input class="botao-turma-input" type="date" name="data">
                        <br>
                        <input class="botao-turma-submit" type="submit" value="Criar Atividade">
                    </form>
                </div>
                <?php 
    $hostname = "127.0.0.1";
    $name = "u935055604_wesley";
    $password = "XwZX1383";
    $DB = "u935055604_dados";
            $conexao = new mysqli($hostname, $name, $password, $DB);
                if ($conexao->connect_errno) {
                    echo "Failes conection: " . $conexao->connect_error;
                    exit();
                } else {
                    if(isset($_POST['nome_atividade']) != '' and isset($_POST['turma_destinada']) and $_POST['data'] and $_POST['turma_destinada'] != ''){
                    $nome_atividade = $conexao->real_escape_string($_POST["nome_atividade"]);
                    $turma_destinada = $conexao->real_escape_string($_POST["turma_destinada"]);
                    $data = $conexao->real_escape_string($_POST["data"]);
                    $sql = 'SELECT `id_atividade` FROM `atividade` WHERE `id_atividade` = "'.$nome_atividade.'"';
                    $resultado_1 = $conexao->query($sql);
                        if($resultado_1->num_rows != 0){
                            echo '<div class="texto-aviso-turma">O nome '.$nome_atividade.' já esta em uso, tente outro</div>';
                        }else{
                            $sql = 'SELECT `id_usuario` FROM `usuario` WHERE `nome_u` = "'.$nome.'"';
                            $resultado = $conexao->query($sql);
                            $row = mysqli_fetch_array($resultado);
                            $id = $row['0'];
                            $sql = 'INSERT INTO `atividade` (`id_atividade`,`id_usuario`,`data_atividade`,`turma`) VALUES ("' . $nome_atividade . '","' . $id . '","' . $data. '","' . $turma_destinada . '");';
                            $resultado = $conexao->query($sql); 
                            }}}?>
            </div>
            <div class="caixa-direita-turma">
                <div class="texto-grande-turma">Lista das Atividades</div>
                <div class="caixa-direita-turma-dentro">
                    <table class="tabela-turma">
                        <tr>
                            <td class="linha-topo-2">Nome</td>
                            <td class="linha-topo-2">Proprietário</td>
                            <td class="linha-topo-2">Turma</td>
                            <td class="linha-topo-2">Data M.</td>
                            <td class="linha-topo-2">Ativo</td>
                            <td class="linha-topo-2">Excluir</td>
                        </tr>
                        <?php
                    global $conexao;
                    global $nome;
                    $sql = "SELECT `turma`,`quant_alu` FROM `turma`;";
                    $resultado = $conexao->query($sql);
                    echo '<datalist id="turmas">';
                    while($row = mysqli_fetch_array($resultado)){
                        $turma = $row['0'];
                        echo'<option name="'.$turma.'">'.$turma.'</option>';
                    }
                    echo'</datalist>';
                    function usado(){
                        if(isset($_GET['nome_atividade'])){
                        global $conexao;
                        global $nome;
                        $sql = "SELECT `id_atividade`,`id_usuario`,`data_atividade`,`turma` FROM `atividade` WHERE `id_atividade` = '".$_GET['nome_atividade']."';";
                        $resultado = $conexao->query($sql);
                        $row = mysqli_fetch_array($resultado);
                        $id_atividade = $row['0'];
                        $id_usuario = $row['1'];
                        $data_atividade = $row['2'];
                        $turma = $row['3'];
                        $sql = 'SELECT `nome_u` FROM `usuario` WHERE `id_usuario` = "'.$id_usuario.'"';
                        $resultado = $conexao->query($sql);
                        $row = mysqli_fetch_array($resultado);
                        $id = $row['0'];
                        if(isset($_GET['turma'])){
                            echo '<form method="POST" action="t_atividade.php?nome='.$nome.'&turma='.$_GET['turma'].'">
                            <tr>
                                <td class="linha-topo">'.$id_atividade.'</td>
                                <td class="linha-topo">'.$id.'</td>
                                <td class="linha-topo">'.$turma.'</td>
                                <td class="linha-topo">'.$data_atividade.'</td>
                                <td class="linha-topo"><input id="botao-select-turma" type="submit"></td>
                                </form>
                                <form method="POST" action="t_exclusao_atividade.php?nome='.$nome.'&nome_atividade='.$id_atividade.'">
                                <td class="linha-topo"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                                </form>
                            </tr>';
                            }else{
                                echo  '<form method="POST" action="t_atividade.php?nome='.$nome.'">
                                <tr>
                                    <td class="linha-topo">'.$id_atividade.'</td>
                                    <td class="linha-topo">'.$id.'</td>
                                    <td class="linha-topo">'.$turma.'</td>
                                    <td class="linha-topo">'.$data_atividade.'</td>
                                    <td class="linha-topo"><input id="botao-select-turma" type="submit"></td>
                                    </form>
                                    <form method="POST" action="t_exclusao_atividade.php?nome='.$nome.'&nome_atividade='.$id_atividade.'">
                                    <td class="linha-topo"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                                    </form>
                                </tr>';
                            }}else{
                                return 1;
                            }
                    }
                    function setpag(){
                        if(isset($_GET['pagina']) or isset($_GET['paginaMais']) or isset($_GET['paginaMenos'])){
                        if(isset($_GET['paginaMenos']) or isset($_GET['paginaMais'])){
                            if(isset($_GET['paginaMenos'])){
                                $qnt_alu_pagina = $_GET['paginaMenos'];
                                if($qnt_alu_pagina > 1){
                                    $qnt_alu_pagina -= 1;
                                    $pagina = $qnt_alu_pagina;
                                }else{
                                $qnt_alu_pagina = $_GET['paginaMenos'];
                                $pagina = $qnt_alu_pagina;
                                }
                                }
                            if(isset($_GET['paginaMais'])){
                                $qnt_alu_pagina = $_GET['paginaMais'];
                                if($qnt_alu_pagina > 0){
                                    $qnt_alu_pagina += 1;
                                    $pagina = $qnt_alu_pagina;
                                }else{
                                $qnt_alu_pagina = $_GET['paginaMais'];
                                $pagina = $qnt_alu_pagina;
                                }
                                }
                            }else{
                                $qnt_alu_pagina = $_GET['pagina'];
                                $pagina = $qnt_alu_pagina;
                            }
                    }}
                    function desusado(){
                        setpag();
                        global $qnt_alu_pagina;
                        global $pagina;
                        $inicio = $qnt_alu_pagina;
                        $qnt_alu_pagina = 1;
                        $qnt_alu_pagina *= 15;
                        $inicio -= 1;
                        $inicio *= 15;  
                        global $conexao;
                        global $nome;
                        $sql = "SELECT `id_atividade`,`id_usuario`,`data_atividade`,`turma` FROM `atividade`;";
                        $resultado = $conexao->query($sql);
                        if(mysqli_num_rows($resultado) != null){
                            if(mysqli_num_rows($resultado) > 0){
                                while($row = mysqli_fetch_array($resultado)){
                                    $id_atividade = $row['0'];
                                    $id_usuario = $row['1'];
                                    $data_atividade = $row['2'];
                                    $turma = $row['3'];
                                    $sql_2 = 'SELECT `nome_u` FROM `usuario` WHERE `id_usuario` = "'.$id_usuario.'"';
                                    $resultado_2
                                     = $conexao->query($sql_2);
                                    $row = mysqli_fetch_array($resultado_2);
                                    $id = $row['0'];
                                echo '<form method="POST" action="t_atividade.php?nome='.$nome.'&nome_atividade='.$id_atividade.'">
                                <tr>
                                    <td class="linha-topo">'.$id_atividade.'</td>
                                    <td class="linha-topo">'.$id.'</td>
                                    <td class="linha-topo">'.$turma.'</td>
                                    <td class="linha-topo">'.$data_atividade.'</td>
                                    <td class="linha-topo"><input class="botao-select-turma" type="submit"></td>
                                    </form>
                                    <form method="POST" action="t_exclusao_atividade.php?nome='.$nome.'&nome_atividade='.$id_atividade.'">
                                    <td class="linha-topo"><input type="submit" class="botao-exclusao-turma" value="X"></td>
                                    </form>
                                </tr>';
                            }
                            echo '</table>
                            <table class="caixa-config-turma-aluno">
                            <tr>
                            <form method="POST" action="t_atividade.php?nome=';redirect();echo'&paginaMenos='.$pagina.'&verificacao=v">
                            <td><input class="passar-pagina" type="submit" value="<"></td>
                            </form>
                            <td></td>
                            <td></td>
                            <form method="POST" action="t_atividade.php?nome=';redirect();echo'&paginaMais='.$pagina.'&verificacao=v">
                            <td><input class="passar-pagina" type="submit" value=">" name="pagina+"></td>
                            </form>
                            </tr>
                            </table>';
                        }
                        }else{
                            if(mysqli_num_rows($resultado) == null){
                                echo '<div class="texto-aviso-turma-tabela">Nenhuma Atividade Encontrada</div>';
                            }
                    }}
                    usado();
                    desusado();
                    ?>
                    </table>
                </div>
            </div>
        </div>
        <div class='conta-geral'>Professor - <?php echo $nome;?></div>
    </body>

    </html>