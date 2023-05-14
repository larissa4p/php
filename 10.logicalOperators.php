<?php
/* 
    Operadores Lógicos

    Como utilizar operadores lógicos, onde  tudo é
    convertido para boleano antes de checar a expressão.

    *Operadores: && || ^ !
*/

// Operador 'E' AND &&
//Este operador retorna verdadeiro quando os dois valores de entrada passados 
//para ele são verdadeiros, caso contrário ele retorna falso.

$empregado = true;
$homeOffice = false;

var_dump(value: $empregado && $homeOffice);

// Operador 'OU' OR ||
//Este operador retorna verdadeiro quando um ou outro valor de entrada é verdadeiro e 
//também quando os dois valores são verdadeiros. Ele só retorna falso quando os dois valores de entrada são falsos

$empregado = false;
$homeOffice = false;
var_dump(value: $empregado || $homeOffice);

// Operador 'OU Exclusivo' XOR ^
// O operador OU Exclusivo retornar verdadeiro quando um dos dois
// valores é verdadeiro, porém retorna falso se os 2 valores forem verdadeiro. 
// Ele também retorna falso se os dois valores de entrada forem falsos.

$empregado = true;
$homeOffice = true;
var_dump(value: $empregado ^ $homeOffice);

// Operador 'Não' NOT !
// Esse operador, diferente dos demais que vimos até agora, realiza uma operação 
// sobre um único valor. Se o valor for verdadeiro ele retorna falso e se o valor for falso 
// ele retorna verdadeiro. Ele também é chamado de operador de negação.

$empregado = true;
var_dump(value: !$empregado);