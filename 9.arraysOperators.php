<?php 
/*
    Operadores de Array

    Como utilizar operadores para trabalhar com arrays.
    Os operadores servem tanto para junção quanto para a checagem de arrays.
    
    *Operadores: + == === != !==
*/

// operador de união

$user = [
    'name' => 'larissa4p',
    'age' => 27
];

$workplace = [
    'companyName' => 'laris ltda',
    'role' => 'fullstack developer'
];

$all = $user + $workplace;
print_r($all);

// Igualdade ==

$userOne = [
    'name' => 'larissa4p',
    'age' => 27
];

$userTwo = [
    'name' => 'larissa4p',
    'age' => 27
];

var_dump($userOne == $userTwo);

// Idêntico ===

$userOne = [
    'name' => 'larissa4p',
    'age' => 27
];

$userTwo = [
    'name' => 'larissa4p',
    'age' => '27'
];

var_dump($userOne === $userTwo);
    
// Diferença !=

$userOne = [
    'name' => 'larissa4p',
    'age' => 27
];

$userTwo = [
    'name' => 'laris',
    'age' => 27
];

var_dump(value: $userOne != $userTwo);

// Não idêntico !==

$userOne = [
    'name' => 'larissa4p',
    'age' => 27
];

$userTwo = [
    'name' => 'larissa4p',
    'age' => 27
];

var_dump(value: $userOne !== $userTwo);