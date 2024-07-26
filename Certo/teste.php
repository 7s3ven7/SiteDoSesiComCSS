<?php
//isset($_POST[$i])



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
    ?>