<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\controladorDeBonificacoes;

$umFuncionario = new Diretor(
	'Rafael',
	new CPF('123.456.789-10'),
	'Diretor',
	20000
);

$umaFuncionaria = new Gerente(
	'Pamela',
	new CPF('987.654.321-10'),
	'Call Center',
	3000
);

$umDesenvolvedor = new Desenvolvedor(
	'Paulo',
	new CPF('345.234.765-12'),
	'Desenvolvedor',
	1800
);

$controlador = new controladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);

echo $controlador->recuperaTotal();
