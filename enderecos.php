<?php

use \Alura\Banco\Modelo\Endereco;

require_once "autoload.php";

$umEndereco = new Endereco(
  'Petrópolis',
  'Bairro qualquer',
  'minha rua',
  '1234'
);

$outroEndereco = new Endereco(
  'Bauru',
  'Gaspa',
  'Contabilistas',
  '5133'
);

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

