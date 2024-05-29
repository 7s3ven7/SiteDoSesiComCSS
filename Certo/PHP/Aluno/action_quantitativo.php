<?php
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";

$conexao = new mysqli($hostname, $name, $password, $DB);//Tenta conexão com o DB
if ($conexao->connect_errno) {
    echo "Failed connection: " . $conexao->connect_error; //erro caso não consiga conectar ao DB
    header("Location: ../../HTML/Aluno/recebimento.html");
    exit();
} else {
    $n_pedido=$_POST['n_pedido'];
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
/*echo '
<table class="tabela-4">
    <div id="linha">
        <hr class="linha">
        <tr>
            <td>
                <div class="texto3">Produto: '.$row['nome'].'</div>
            </td>
            <td>
                <div class="texto3">Unidade: '.$row['und'].'</div>
            </td>
            <td>
                <div class="texto3">Quantidade de Unidades: '.$row['quantidade_und'].'</div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="texto3">Valor por Unidade: '.$row['valor_und'].'</div>
            </td>
            <td>
                <div class="texto3">Quantidade de Produtos: '.$row['quant_prod'].'</div>
            </td>
            <td>
                <div class="texto3">Valor total: '.$row['quantidade_und']*$row['valor_und'].'</div>
            </td>
        </tr>
    </div>
</table>
';
echo '<form method="POST" action="action_qualitativo.php">
    <input class="botao-2" type="submit" value="Enviar" left=5px>
</form>';
*/
?>