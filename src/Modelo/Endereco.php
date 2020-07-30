<?php

namespace Alura\Banco\Modelo;

/**
 * @package Alura\Banco\Modelo
 * @property-read string $rua
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $numero
 */

class Endereco
{
    use AcessoPropriedades;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
    
    public function __toString() : string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function alteraCidade($cidade) : void
    {
        $this->cidade = $cidade;
    }

    public function __set(string $nomeArquivo, $valor)
    {
        $metodo = 'altera' . ucfirst($nomeArquivo);
        $this->$metodo($valor);
    }
 
    public function alteraBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }
 
    public function alteraRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }
 
    public function alteraNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}
