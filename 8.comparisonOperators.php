<?php
/*
    Operadores de Comparação

    como utilizar operadores de Comparação.
    onde conseguir retornar expressões boleanas para o código.

    *Operadores: == === != !==
    *Operadores: > >= < <=
*/

// igualdade ==
var_dump(value: 1 == 1);
var_dump(value: 1 == '1');
$password = "secret";
var_dump($password == "secret123");

// diferente !=
var_dump(value: 1 != 2);
$password = "senha123";
var_dump(value: $password != "secret123");

// idêntico ===
var_dump(value: '1'  === 1);
var_dump(value: 1 === 1);

// não idêntico !==
var_dump(value: '1'  !== 1);
var_dump(value: 1 !== 1);

// operador maior > 
$number = 6;
var_dump(value: $number > 7);
var_dump(value: $number > 5);

// Maior ou Igual >=
$number = 2;
var_dump(value: $number >= 3);
var_dump(value: $number >= 2);
var_dump(value: $number >= 1);

// Operador Menor <
$number = 2;
var_dump(value: $number < 1);
var_dump(value: $number < 3);

// Menor ou Igual <=
$number = 2;
var_dump(value: $number <= 3);
var_dump(value: $number <= 1);