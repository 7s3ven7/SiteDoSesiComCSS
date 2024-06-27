<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="a_site.css">
    <meta http-equiv="Content-Type" content="text/html" ;charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
</head>

<body>
    <div id="tipo">Aluno</div>
    <div class="fundo"></div>
    <details class="details-all">
        <summary class="details-big">Recebimento</summary>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_qualitativo_a.php">
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
        <form action="t_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <details class="details-all">
        <summary class="details-big">Expedição</summary>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Nota (WIP)">
        </form>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Qualitativo (WIP)">
        </form>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="Quantitativo (WIP)">
        </form>

    </details>
    <details class="details-all">
        <summary class="details-big">Relatórios</summary>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
        <form action="t_a.php">
            <input class="details-small" type="submit" value="WIP">
        </form>
    </details>
    <div class="menu">Menu</div>
    <div class="caixa">
        <form action="t_quantitativo_a.php" method="POST">
            <div class="quadrado-quantitativo">
                <div class="quantitativo-texto">Digite o Código do fornecedor</div>
                <input class="quantitativo-input-pedido" type="number" name="cod_forne">
                <input class="quantitativo-enviar-pedido" type="submit">
                <div class="quadrado-quantitativo-2">
        </form>
        <?php
    session_start();
        
    if(isset($_POST['cod_forne'])){
        $hostname = "127.0.0.1";
        $name = "root";
        $password = "root";
        $DB = "dados";

        $conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
        if ($conexao->connect_errno) {
            echo "Failed connection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
            header("Location: t_quantitativo_a.php");
            exit();
        } else {
            $v1 = $_POST['cod_forne'];
			$sql="SELECT * FROM `produto_p` WHERE `cod_forne` = '".$v1."';";
			$resultado = $conexao->query($sql);
        if(isset($_POST['cod_forne'])){
        if(mysqli_num_rows($resultado) > 0){
            while($row = mysqli_fetch_array($resultado)){
                $s1 = $row['0'];
                $s2 = $row['1'];
                $s3 = $row['2'];
                $s4 = $row['3'];
                $s5 = $row['4'];
                $s6 = $row['5'];
                echo '
                <div class="quadrado-produto">
                    <div class="quantitativo-texto">Número da Nota Fiscal</div>
                    <input class="quantitativo-input-pedido-nota" type="text" value="'.$s1.'" disabled>
                </div>
                <div class="quadrado-produto">
                    <div class="quantitativo-texto">Nome do produto</div>
                    <input class="quantitativo-input-pedido-nota" type="text" value="'.$s2.'" disabled>
                </div>
                    <table class="quantitativo-margin">
                        <tr>
                            <td>
                                <div class="quantitativo-input-valor-texto">UN</div>
                            </td>
                            <td>
                                <div class="quantitativo-input-valor-texto">QTD</div>
                            </td>
                            <td>
                                <div class="quantitativo-input-valor-texto">R$/unit</div>
                            </td>
                            <td>
                                <div class="quantitativo-input-valor-texto">R$Total</div>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="quantitativo-input-valor" type="text" value="'.$s3.'" name="un"></td>
                            <td><input class="quantitativo-input-valor" type="text" value="'.$s4.'" name="qtd"></td>
                            <td><input class="quantitativo-input-valor" type="text" value="'.$s5.'" name="unit"></td>
                            <td><input class="quantitativo-input-valor" type="text" value="'.$s6.'" name="total"></td>
                            <td><input class="quantativo-input-valor-submit" type="checkbox" name="produto"></td>
                        </tr>
                    </table>
                    <table class="quantitativo-margin-mini">
                        <tr>
                            <td>
                            <div class="quantitativo-input-valor-texto">Faltando</div>
                            </td>
                            <td>
                                <input class="quantativo-input-valor-submit-mini" type="checkbox" name="falta">
                            </td>
                            <td>
                                <div class="quantitativo-input-valor-texto">Avariado</div>
                            </td>
                            <td>
                                <input class="quantativo-input-valor-submit-mini" type="checkbox" name="avariado">
                            </td>
                        </tr>
                    </table>
                ';
}
    $n_pedido=$_POST['cod_forne'];
    $SQL = 'SELECT * FROM `produto_p` 
    WHERE `n_pedido` = '.$n_pedido.';';
    //Inserir no DB
    $resultado = $conexao->query($SQL); //Envia para a tela de Login ao Cadastrar
    if($resultado->num_rows != 0) //Caso a pesquisa no DB tenha resultado, ele puxa os dados "id" e "tipo" do DB
	{
		for($i=1;$i<=$resultado->num_rows;$i++){
			$row = $resultado -> fetch_array();
		}
	} else {
		$conexao -> close();
		exit();
	}            
            }
        }}}
?>
    </div>
    </div>
</body>