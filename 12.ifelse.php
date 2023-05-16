<?php
/*
    Condicionais IF/ELSE

    Estruturas Condicionais de Controle.
    
    SE(CONDIÇÃO){
        diga "eaee";
    } SENÃO {
        diga "não falo com bandeirantes";
    }
*/

$name = "Larissa";
$employed = true;
$age = 27;

if($name === "Larissa" && $employed === true) {
    echo "Acesso Autorizado" . PHP_EOL;
} else {
    echo "Acesso Negado"  . PHP_EOL;
}


if($age >= 18) {
    echo "maior de idade"  . PHP_EOL;
} else{
    echo "menor de idade"  . PHP_EOL;
}