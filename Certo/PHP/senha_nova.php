<form method="POST" action="senha_nova.php">
    <input type="number" name="valor">
    <div>Trocar de senha</div>
    <?php
                if(isset($_POST['valor'])){
                $senha = '';
                $senha1 = '';
                $i = rand(4,10);
                for($i;0<=$i;$i){
                $digito = array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','Q','q','R','r','S','s','T','t','U','u','V','v','W','w','X','x','Y','y','Z','z','0','1','2','3','4','5','6','7','8','9','_','-');
                $numero = rand(0,63);
                $senha = $digito[$numero];
                $i -= 1;
                $senha1 = $senha1.$senha;
                }
                echo $senha1;}
                ?>
    </div>
    <input class="botao" type="submit" value="Cadastrar-se">
</form>