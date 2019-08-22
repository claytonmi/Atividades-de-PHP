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

class Pessoa{
    private $nome;
    private $documento;

    function _construct(string $nome , Documento $documento){
        $this->nome = $nome;
        $this->documento = array();
    }

    public function addDocumento($documento){
        $this->documento[] = $documento;
    }

    public function getNome(){
        return $this->$nome;
    }
    public function listarDocumento(){
        foreach ($this->documento as $doc) {
            echo $doc->getTipo()." ".$doc->getNumero()."<br>";
        }
    }
}

$rg = new Documento("RG","12345678");
$cpf = new Documento("CPF","1444444454-45");
$pessoa = new Pessoa("Roberval");

$pessoa->addDocumento($rg);
$pessoa->addDocumento($cpf);


$pessoa->listarDocumento();