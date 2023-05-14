<?php
/*
    Variáveis

    Como declarar variáveis no PHP e quais regras seguir.
*/

$name = "larissa4p";

echo $name . PHP_EOL;

$name = "Larissa Bessa";

echo $name . PHP_EOL;

$age = 27;

echo $age . PHP_EOL;

$data = [
    'name' => 'larissa4p',
    'age' => 27,
    'city' => 'Brasilia',
    'login' => true
];

echo $data["city"]. PHP_EOL;
echo $data["login"].PHP_EOL;


// constantes
define("github", "github.com/larissa4p");

echo github;