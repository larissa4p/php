<?php 
/*
    DATA TYPES
    
    Quais os tipos de dados que são usados pelo PHP.
    
    String, Boolean, Integer, Double e Array
*/

var_dump(value: "testando string");
//boolean
var_dump(value: false);
var_dump(value: true);
// Integer
var_dump(value: 986712);
// Double
var_dump(value: 9786897.123);
// Array
var_dump(["Larissa", 27, "dev", true]);

// atribuindo variavel
$dados = ["Larissa", 27, "dev", true];
var_dump($dados[0]);

$dados = ["name" => "Larissa", 27, "dev", true];
var_dump($dados["name"]);