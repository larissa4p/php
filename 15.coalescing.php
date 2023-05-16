<?php
/*
    COndições de Coalescência Nula

    Onde você faz uma checagem de uma variável e vê se há um valor dentro da mesma, caso não
    você já retorna um valor padrão.

    valorPredefinido ?? reotnro caso não exista valor;

    isset(valorPredefinido) ? valorPredefinido : retorno caso não exista valor;
*/

$user = [
    'name' => 'Larissa',
    'age' => 27,
    'dev' => 'analista de sistemas',
];

// echo $user['name'] ?? $user['dev'] ?? 'phpMassa';

echo $user['employer'] ?? 'arruma um emprego ' . $user['name'] . ' kkkk';