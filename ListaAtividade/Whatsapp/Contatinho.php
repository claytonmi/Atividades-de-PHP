<?php

class Contatinho{
    private $nome;
    private $celular;

    function __construct(string $nome, string $celular){
        $this->nome = $nome;
        $this->celular= $celular;
    }

    public function getNome(){
        return $this->nome;
    }   
}
