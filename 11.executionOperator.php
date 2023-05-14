<?php
/*
    Operador de Execução

    Esse operador executa um comando a nível SHELL na sua maquina,
    equiparando as funções shell_exec(). exec() e system().

    *Operador: ``
 */

 $output = `echo "eae"`;

echo $output;