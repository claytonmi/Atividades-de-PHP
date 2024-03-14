<?php

// Classe base Conta bancária
class Conta {
    protected $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        } else {
            echo "Saldo insuficiente.<br>";
            return false;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}