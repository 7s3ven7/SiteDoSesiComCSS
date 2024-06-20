<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="site.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>

<body>

    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Menus</summary>
        <form action="../../HTML/Professor/tela.html">
            <input class="details-small" type="submit" value="Inicio"></div>
        </form>
        <form action="../../HTML/index.html">
            <input class="details-small" type="submit" value="Sair"></div>
        </form>
        <form action="../../HTML/Professor/reset.html">
            <input class="details-small" type="submit" value="Resetar"></div>
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Cadastros</summary>
        <form action="../../HTML/Professor/fornecedor.html">
            <input class="details-small" type="submit" value="Fornecedor"></div>
        </form>
        <form action="../../HTML/Professor/empresa.html">
            <input class="details-small" type="submit" value="Empresa"></div>
        </form>
        <details>
            <summary class="details-small-more">Cliente</summary>
            <form action="../../HTML/Professor/cliente.html">
                <input class="details-small" type="submit" value="Cadastro"></div>
            </form>
            <form action="../../HTML/Professor/pedido.html">
                <input class="details-small" type="submit" value="Pedido"></div>
            </form>
        </details>
    </details>
    <details class="details-all">
        <summary class="details-big">Produto</summary>
        <form action="produto.php">
            <input class="details-small" type="submit" value="Cadastro">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="../../HTML/Professor/quantitativo_recebimento.html">
            <input class="details-small" type="submit" value="Quantitativo"></div>
        </form>
        <form action="../../HTML/Professor/nota_recebimento.html">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="../../HTML/Professor/quantitativo_expedicao.html">
            <input class="details-small" type="submit" value="Quantitativo">
        </form>
        <form action="../../HTML/Professor/nota_recebimento.html">
            <input class="details-small" type="submit" value="Nota Fiscal">
        </form>
    </details>
    <div class="details-caixa"></div>

    <div class="caixa">
    </div>
    <div class="caixa-fixa">
        <form method="POST" action="produto.php">
            <div class="texto-produto">Quantos produtos você irá registrar: <input class="botao-produto" type="number"
                    name="vezes" placeholder="Número de vezes*"></div>
            <br>
            <div class="texto-produto">Quantos produtos irão ser aleatórios: <input class="botao-produto" type="number"
                    name="vezes_aleatorio" placeholder="opcional*"></div>
            <input class="enviar-numero-produto" type="submit">
        </form>
        <?php
                $hostname = "127.0.0.1";
                $name = "root";
                $password = "root";
                $DB = "dados";
                
                $conexao = new mysqli($hostname, $name, $password, $DB);
                if ($conexao->connect_errno) {
                    echo "Failed connection: " . $conexao->connect_error;
                    header("Location: ../../HTML/Aluno/recebimento.html");
                    exit();
                }elseif(isset($_POST['vezes_aleatorio'])) {
                    $i = $_POST['vezes'];
                    $ii = $_POST['vezes_aleatorio'];
                    $ll = $ii;
                    $l = $i;
                    $li = $l - $ll;
                    $numero = 1;
                    $v1 = 'cod_fone';
                    $v2 = 'tipo';
                    $v3 = 'validade';
                    $v4 = 'lote';
                    $v5 = 'nome';
                    $v6 = 'marca';
                    $v7 = 'numero';
                    $v8 = 'unidade';
                    $v9 = 'quantidade_unidade';
                    $v10 = 'quantidade_produto';
                    $v11 = 'valor_unidade';
                    $v12 = 'peso';
                echo'<form method="POST" action="cadastro_produto.php?$l='.$l.'">';
                    for($ii;$ii>0;$ii){    
                    $array1 = array("1-213A56-23C123","H-234P25-213S90","7-2386K2-2962V3","0-O23I12-73T937","7-JS26D7-82M6V4");              
                    $n1 = rand(0,4);
                    $b1 = $array1[$n1];
                    $array2 = array("pereciveis","não precesiveis","químicos","seca");              
                    $n2 = rand(0,3);
                    $b2 = $array2[$n2];
                    $array3 = array("2028-03-09","2030-05-02","2027-10-01","2029-08-19","2028-10-29");              
                    $n3 = rand(0,4);
                    $b3 = $array3[$n3];
                        if($b3 == $array3[0]){
                            $array4_1 = array('0903202801','0903202802','0903202803');
                            $n4_1 = rand(0,2);
                            $b4 = $array4_1[$n4_1];
                        }elseif($b3 == $array3[1]){
                            $array4_2 = array('0205203001','0205203002','0205203003');
                            $n4_2 = rand(0,2);
                            $b4 = $array4_2[$n4_2];
                        }elseif($b3 == $array3[2]){
                            $array4_3 = array('0110202701','0110202702','0110202703');
                            $n4_3 = rand(0,2);
                            $b4 = $array4_3[$n4_3];
                        }elseif($b3 == $array3[3]){
                            $array4_4 = array('1908202901','1908202902','1908202903');
                            $n4_4 = rand(0,2);
                            $b4 = $array4_4[$n4_4];
                        }elseif($b3 == $array3[4]){
                            $array4_5 = array('2910202801','2910202802','2910202803');
                            $n4_5 = rand(0,2);
                            $b4 = $array4_5[$n4_5];};
                        $bolacha = 0.5;
                        $maça = 0.5;
                        $banana = 0.5;
                        $aveia = 0.25;
                        $iogurt = 0.5;
                        $borracha = 0.25;
                        $lápis = 0.25;
                        $carteira = 10;
                        $cadeira = 5;
                        $apontador = 0.5;
                        $alcool = 1.5;
                        $soda = 2.5;
                        $inxofre = 1;
                        $tinta = 25;
                        $thinner = 3.5;
                        $poliestireno = 0.05;
                        $plástico = 0.25;
                        $tecido = 2.5;
                        $fio = 1;
                        $celular = 0.5;
                        if($b2 == $array2[0]){
                            $array5_1 = array("bolacha","maça","banana","aveia","iogurt");
                            $n5_1 = rand(0,4);
                            $b5 = $array5_1[$n5_1];
                        }elseif($b2 == $array2[1]){
                            $array5_2 = array("borracha","lápis","carteira","cadeira","apontador");
                            $n5_2 = rand(0,4);
                            $b5 = $array5_2[$n5_2];
                        }elseif($b2 == $array2[2]){
                            $array5_3 = array("alcool","soda","inxofre","tinta","thinner");
                            $n5_3 = rand(0,4);
                            $b5 = $array5_3[$n5_3];
                        }elseif($b2 == $array2[3]){
                            $array5_4 = array("poliestireno","plástico","tecido","fio","celular");
                            $n5_4 = rand(0,4);
                            $b5 = $array5_4[$n5_4];};
                        if($b5 == "balacha"){
                            $b6 = "bolachock";
                        }elseif($b5 == "maça" or $b5 == "banana" or $b5 == "aveia"){
                            $b6 = "frutas fresca";
                        }elseif($b5 == "iogurt"){
                            $b6 = "dinone";
                        }elseif($b5 == "borracha" or $b5 == "lápis" or $b5 == "apontador"){
                            $b6 = "castelo do faber";
                        }elseif($b5 == "carteira" or $b5 == "cadeira"){
                            $b6 = "moveis do max";
                        }elseif($b5 == "alcool" or $b5 == "soda" or $b5 == "inxofre"){
                            $b6 = "MSC";
                        }elseif($b5 == "tinta"){
                            $b6 = "Tinturas do josué";
                        }elseif($b5 == "thinner"){
                            $b6 = "trienalli";
                        }elseif($b5 == "poliestireno"){
                            $b6 = "isorpo";
                        }elseif($b5 == "plástico"){
                            $b6 = "plastic tecidos";
                        }elseif($b5 == "tecido" or $b5 == "fio"){
                            $b6 = "mahala";
                        }elseif($b5 == "celular"){
                            $b6 = "aplee";
                        }
                    $b7 = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
                    if(isset($array5_2)){           
                        if($b5 == $array5_2[2] or $b5 == $array5_2[3]){
                            $b8 = "pallet";
                        }}else{
                            $array8_1 = array("caixa","pallet");
                            $n8 = rand(0,1);
                            $b8 = $array8_1[$n8];}
                    $b9 = rand(1,999);
                    $b10 = rand(1,999);
                    $array11 = array("5,00 R$","10,00 R$","15,00 R$","20,00 R$","25,00 R$","30,00 R$","40,00 R$","50,00 R$","60,00 R$","70,00 R$","80,00 R$","90,00 R$","100,00 R$");
                    $n11 = rand(0,12);
                    $b11 = $array11[$n11];
                    $b12 = $b9 * $$b5;
                    echo'
            <br>
            <div class="numero-produto">Produto Número: '.$numero.'</div>
            <br>
            <table class="tabela">
                <tr>
                    <td>Código do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v1.'" value="'.$b1.'" placeholder="1"></td>
                    <td>Tipo: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v2.'" value="'.$b2.'" placeholder="caixa"></td>
                    <td>Validade: </td>
                    <td><input class="botao-tabela" type="date" name="'.$v3.'" value="'.$b3.'"></td>
                </tr>
                <tr>
                    <td>Lote: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v4.'" value="'.$b4.'" placeholder="1"></td>
                    <td>Nome: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v5.'" value="'.$b5.'" placeholder="produto"></td>
                    <td>Marca do produto: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v6.'" value="'.$b6.'" placeholder="marca"></td>
                </tr>
                <tr>
                    <td>Número do pedido: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v7.'" value="'.$b7.'" placeholder="1"></td>
                    <td>Unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v8.'" value="'.$b8.'" placeholder="1"></td>
                    <td>Quantidade de unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v9.'" value="'.$b9.'" placeholder="1"></td>
                </tr>
                <tr>
                    <td>Quantidade de produto: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v10.'" value="'.$b10.'" placeholder="1"></td>
                    <td>Valor da unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v11.'" value="'.$b11.'" placeholder="1"></td>
                    <td>Peso em kilo grama: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v12.'" value="'.$b12.'" placeholder="1"></td>
                </tr>
            </table>';
            $numero += 1;
            $v1 = $v1.'p';
            $v2 = $v2.'p';
            $v3 = $v3.'p';
            $v4 = $v4.'p';
            $v5 = $v5.'p';
            $v6 = $v6.'p';
            $v7 = $v7.'p';
            $v8 = $v8.'p';
            $v9 = $v9.'p';
            $v10 = $v10.'p';
            $v11 = $v11.'p';
            $v12 = $v12.'p';
            $ii -= 1;
                    }
                    for ($li;$li>0;$li) {
                        echo'
                        <br>
                        <div class="numero-produto">Produto Número: '.$numero.'</div>
                        <br>
                        <table class="tabela">
                            <tr>
                                <td>Código do fornecedor: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v1.'" placeholder="1"></td>
                                <td>Tipo: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v2.'" placeholder="caixa"></td>
                                <td>Validade: </td>
                                <td><input class="botao-tabela" type="date" name="'.$v3.'"></td>
                            </tr>
                            <tr>
                                <td>Lote: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v4.'" placeholder="1"></td>
                                <td>Nome: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v5.'" placeholder="produto"></td>
                                <td>Marca do produto: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v6.'" placeholder="marca"></td>
                            </tr>
                            <tr>
                                <td>Número do pedido: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v7.'" placeholder="1"></td>
                                <td>Unidade: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v8.'" placeholder="1"></td>
                                <td>Quantidade de unidade: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v9.'" placeholder="1"></td>
                            </tr>
                            <tr>
                                <td>Quantidade de produto: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v10.'" placeholder="1"></td>
                                <td>Valor da unidade: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v11.'" placeholder="1"></td>
                                <td>Peso em kilo grama: </td>
                                <td><input class="botao-tabela" type="text" name="'.$v12.'" placeholder="1"></td>
                            </tr>
                        </table>';
                    $numero += 1;
                    $v1 = $v1.'p';
                    $v2 = $v2.'p';
                    $v3 = $v3.'p';
                    $v4 = $v4.'p';
                    $v5 = $v5.'p';
                    $v6 = $v6.'p';
                    $v7 = $v7.'p';
                    $v8 = $v8.'p';
                    $v9 = $v9.'p';
                    $v10 = $v10.'p';
                    $v11 = $v11.'p';
                    $v12 = $v12.'p';
                    $ii -= 1;
                    }}elseif(isset($_POST['vezes'])){
                    $i = $_POST['vezes'];
                    $l = $i;
                    $numero = 1;
                    $v1 = 'cod_fone';
                    $v2 = 'tipo';
                    $v3 = 'validade';
                    $v4 = 'lote';
                    $v5 = 'nome';
                    $v6 = 'marca';
                    $v7 = 'numero';
                    $v8 = 'unidade';
                    $v9 = 'quantidade_unidade';
                    $v10 = 'quantidade_produto';
                    $v11 = 'valor_unidade';
                    $v12 = 'peso';
                echo'<form method="POST" action="cadastro_produto.php?$l='.$l.'">';
                    echo'
            <br>
            <div class="numero-produto">Produto Número: '.$numero.'</div>
            <br>
            <table class="tabela">
                <tr>
                    <td>Código do fornecedor: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v1.'" placeholder="1"></td>
                    <td>Tipo: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v2.'" placeholder="caixa"></td>
                    <td>Validade: </td>
                    <td><input class="botao-tabela" type="date" name="'.$v3.'"></td>
                </tr>
                <tr>
                    <td>Lote: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v4.'" placeholder="1"></td>
                    <td>Nome: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v5.'" placeholder="produto"></td>
                    <td>Marca do produto: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v6.'" placeholder="marca"></td>
                </tr>
                <tr>
                    <td>Número do pedido: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v7.'" placeholder="1"></td>
                    <td>Unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v8.'" placeholder="1"></td>
                    <td>Quantidade de unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v9.'" placeholder="1"></td>
                </tr>
                <tr>
                    <td>Quantidade de produto: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v10.'" placeholder="1"></td>
                    <td>Valor da unidade: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v11.'" placeholder="1"></td>
                    <td>Peso em kilo grama: </td>
                    <td><input class="botao-tabela" type="text" name="'.$v12.'" placeholder="1"></td>
                </tr>
            </table>';
            $numero += 1;
            $v1 = $v1.'p';
            $v2 = $v2.'p';
            $v3 = $v3.'p';
            $v4 = $v4.'p';
            $v5 = $v5.'p';
            $v6 = $v6.'p';
            $v7 = $v7.'p';
            $v8 = $v8.'p';
            $v9 = $v9.'p';
            $v10 = $v10.'p';
            $v11 = $v11.'p';
            $v12 = $v12.'p';
            $i -= 1;
                    }              
                echo '<table class="table">';
                echo '<input class="botao" type="submit">';
                echo'<div class="details-caixa-2"></div>';
                echo'</form>';
            ?>
    </div>
    <div class="menu">Menu</div>
    <div id="tipo">Conta: Professor</div>

</body>

</html>