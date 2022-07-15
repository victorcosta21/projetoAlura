<?php

namespace Modelo\Conta;

use Modelo\Pessoa;
use Modelo\CPF;
use Modelo\Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
    public function recuperaEndereco() : string
    {
        return $this->endereco;
    }
}