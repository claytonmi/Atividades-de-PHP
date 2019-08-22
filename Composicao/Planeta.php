<?php
class Planeta{
    private $nome;
    
    function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}