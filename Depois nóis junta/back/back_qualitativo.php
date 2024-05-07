<?php
if(isset($_POST['1'])){
    $v1 = v;
} else {
    $v1 = f;
}

if(isset($_POST['2'])){
    $v2 = v;
} else {
    $v2 = f;
}

if(isset($_POST['3'])){
    $v3 = v;
} else {
    $v3 = f;
}

if(isset($_POST['4'])){
    $v4 = v;
} else {
    $v4 = f;
}

if(isset($_POST['5'])){
    $v5 = v;
} else {
    $v5 = f;
}

if(isset($_POST['6'])){
    $v6 = v;
} else {
    $v6 = f;
}

if(isset($_POST['7'])){
    $v7 = v;
} else {
    $v7 = f;
}

if(isset($_POST['8'])){
    $v8 = v;
} else {
    $v8 = f;
}

if(isset($_POST['9'])){
    $v9 = v;
} else {
    $v9 = f;
}

if(isset($_POST['10'])){
    $v10 = v;
} else {
    $v10 = f;
}

if(isset($_POST['11'])){
    $v11 = v;
} else {
    $v11 = f;
}

if(isset($_POST['12'])){
    $v12 = v;
} else {
    $v12 = f;
}

if(isset($_POST['13'])){
    $v13 = v;
} else {
    $v13 = f;
}

if(isset($_POST['14'])){
    $v14 = v;
} else {
    $v14 = f;
}

if(isset($_POST['15'])){
    $v15 = v;
} else {
    $v15 = f;
}

if(isset($_POST['16'])){
    $v16 = v;
} else {
    $v16 = f;
}

if(isset($_POST['17'])){
    $v17 = v;
} else {
    $v17 = f;
}

$SQL = 'INSERT INTO `conferencia` (`container_desgas`,`avari_late_d`,`avari_late_e`,`avari_teto`,`avaria_frente`,`sem_lacre`,`adesivo_avariado`,`excesso_altu`,`excesso_d`,`excesso_e`,`excesso_fron`,`painel_avariado`,`sem_cabo_energia`,`sem_lona`,`canhoto_ass`,`volume_correto`,`atraso`) 
    VALUES ('.$v1.','.$v2.','.$v3.','.$v4.','.$v5.','.$v6.','.$v7.','.$v8.','.$v9.','.$v10.','.$v11.','.$v12.','.$v13.','.$v14.','.$v15.','.$v16.','.$v17.');';





?>