<?php

namespace Alura\Banco\Modelo\Funcionario;

class NomeCurtoException extends \LengthException
{
    public function __construct()
    {
        $mensagem = "Seu nome deve ter pelo menos 5 letras.";
        parent::__construct($mensagem);
    }
}