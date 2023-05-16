<?php 
/*
    Condições

    Estruturas Condicionais de Casos.

    A ideia é fazer condições com uma lista pré definida de valores
    que podem retornar verdadeiro. Tendo uma única opção para retornar
    falso, sendo ela a default: (padrão)

    TROQUE(CONDIÇÃO){
        caso VALOR1:
        diga 'testando';
            pare;
        caso VALOR2:
        diga "php";
            pare;
        caso não:
        diga 'massa';
    }
*/

$name = "Larissa";

switch($name){
    case "Larissa":
        echo "saaalve " . $name;
        break;
    case "Batman":
        echo "Olá " . $name;
        break;
    default: 
        echo "não listado";
}