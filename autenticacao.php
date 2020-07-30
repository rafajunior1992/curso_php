<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Gerente;

require_once "autoload.php";

$autenticador = new Autenticador();
$umDiretor = new Gerente(
  'Jão da Silva',
  new CPF('123.123.456-10'),
  10000
); 

$autenticador->tentaAutenticar($umDiretor, '1234');