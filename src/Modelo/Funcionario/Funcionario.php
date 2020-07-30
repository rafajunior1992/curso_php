<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa {
	private $salario;

	public function __construct(string $nome, CPF $cpf, float $salario) {
		parent::__construct($nome, $cpf);
		$this->salario = $salario;
	}

	public function recuperaSalario(): float {
		return $this->salario;
	}

	public function alteraNome(string $nome): void{
		$this->validaNomeTitular($nome);
		$this->nome = $nome;
	}

	abstract public function calculaBonificacao(): float;
}
