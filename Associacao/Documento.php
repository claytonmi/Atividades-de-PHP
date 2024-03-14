<?php

class Documento{
    private $tipo;
    private $numero;

    function __construct(String $tipo, string $numero){
        $this->tipo = $tipo;
        $this->numero = $numero;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getNumero(){
        return $this->numero;
    }
    
}
