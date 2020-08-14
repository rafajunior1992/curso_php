<?php

error_reporting(E_ALL);

ini_set('display_errors', 1); //mostrar erros na tela
ini_set('log_errors', 0); //fazer log de erros
// ini_set('error_log', '/var/log/minha_aplicacao'); //local onde será feito o log de erros

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isso é perigoso." . PHP_EOL;
            break;
        
        case E_NOTICE:
            echo "Melhor corrigir." . PHP_EOL;
            break;
    }
});

echo $variavel;
echo $array[12];

echo CONSTANTE;