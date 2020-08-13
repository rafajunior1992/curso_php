<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\NomeCurtoException;

require_once 'autoload.php';

try {
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.789xx'),
            'Rafa',
            new Endereco('cidade', 'bairro', 'rua', 'numero')    
        )
    );
} catch (NomeCurtoException $e) {
    echo $e->getMessage();
} catch (InvalidArgumentException $invalid) {
    echo "Número de CPF inválido.";
}

// try {
//     $contaCorrente->deposita(-100);
// } catch (InvalidArgumentException $th) {
//     echo "Você não pode depositar valor negativo.";
//     echo $th->getMessage();
// }