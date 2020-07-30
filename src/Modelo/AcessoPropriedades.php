<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
  public function __get(string $nomeArquivo)
    {
        $metodo = 'recupera' . ucfirst($nomeArquivo);
        return $this->$metodo();
    }
}
