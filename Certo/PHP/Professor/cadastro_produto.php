<html>
<?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB

if ($conexao->connect_errno) {
    echo "Failed conection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    exit();
} else {
    $z = $_GET['$l'];
    $a = 'cod_fone';
    $b = 'tipo';
    $c = 'validade';
    $d = 'lote';
    $e = 'nome';
    $f = 'marca';
    $g = 'numero';
    $h = 'unidade';
    $i = 'quantidade_unidade';
    $j = 'quantidade_produto';
    $k = 'valor_unidade';
    $l = 'peso';
    while($z>0){
        $v1 = $_POST[$a];
        $v2 = $_POST[$b];
        $v3 = $_POST[$c];
        $v4 = $_POST[$d];
        $v5 = $_POST[$e];
        $v6 = $_POST[$f];
        $v7 = $_POST[$g];
        $v8 = $_POST[$h];
        $v9 = $_POST[$i];
        $v10 = $_POST[$j];
        $v11 = $_POST[$k];
        $v12 = $_POST[$l];
        $vtotal = $v11 * ($v9*$v10);
        for($zz = 1;$zz>0;$zz){
        $SQL = 'INSERT INTO `produto_p` (`cod_forne`,`tipo`,`date_v`,`lote`,`nome_p`,`marca_p`,`id_atividade'.esse_aqui_tem_problema.'`,`und`,`quant_und`,`quant_prod`,`valor_und`,`Kg`,`valor_total'.esse_aqui_tem_problema.'`) 
    VALUES ("' . $v1 . '","' . $v2 . '","' . $v3 . '","' . $v4 . '","' . $v5 . '","'.$v6.'","' . $v7 . '","' . $v8 . '","' . $v9 . '","' . $v10 . '","' . $v11 . '","'.$v12.'","'.$vtotal.'")';
    $resultado = $conexao->query($SQL);
    $zz -= 1;
        }
        $zz = 1;
    $a = $a.'p';
    $b = $b.'p';
    $c = $c.'p';
    $d = $d.'p';
    $e = $e.'p';
    $f = $f.'p';
    $g = $g.'p';
    $h = $h.'p';
    $i = $i.'p';
    $j = $j.'p';
    $k = $k.'p';
    $l = $l.'p';
        $z -= 1;
    }
    $conexao->close();
    header("Location: produto.php?vv=1");
}
?>

</html>