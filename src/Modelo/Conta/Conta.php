<?php

namespace Modelo\Conta;

class Conta
{
    private $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar ( float $valorASacar) : void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
           $this->saldo -= $valorASacar;
    }

    public function depositar ( float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo "Valor presica ser positivo";
            return;
        }
            $this->saldo += $valorADepositar;
    }

    public function transferir ( float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo () : float
    {
        return $this->saldo;
    }

    public function recuperaNome () : string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpf () : string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas () : int
    {
        return self::$numeroDeContas;
    }

}