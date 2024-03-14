<?php

// Classe Poupança, que herda de Conta
class Poupanca extends Conta {
    private $juros;

    public function __construct($saldoInicial, $juros) {
        parent::__construct($saldoInicial);
        $this->juros = $juros;
    }

    public function aplicarJuros() {
        $jurosCalculados = $this->saldo * ($this->juros / 100);
        parent::depositar($jurosCalculados);
    }
}
