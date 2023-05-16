<?php
/*
    Condições Ternárias

    Estrutuas Condicionais Ternárias.
    Usar operador ternário ajuda na escrita de condições if/else diminuindo
    para uma única linha. Ou seja, será algo para ser usado quando 
    você tem uma fácil comparação ou retorno SIMPLES.

    condição ? retorno verdadeiro : retorno falso;
*/

$age = 27;

$underAge = $age >= 18 ? "Sim, você é maior de idade!" : "Você não é maior de idade!";

echo $underAge;