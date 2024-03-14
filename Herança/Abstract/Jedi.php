<?php

abstract class Jedi {
    protected $nome;
    protected $rank;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    abstract public function treinar();

    public function getNome() {
        return $this->nome;
    }

    public function getRank() {
        return $this->rank;
    }
}




