<?php

class Contatinho {
    private $nome;
    private $numero;

    public function __construct($nome, $numero) {
        $this->nome = $nome;
        $this->numero = $numero;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNumero() {
        return $this->numero;
    }
}
