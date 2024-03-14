<?php
class Pessoa{
    private $nome;
    private $documento;

    public function __construct(String $nome){
        $this->nome = $nome;
        $this->documento = array();
    }

    public function addDocumento($documento){
        $this->documento[] = $documento;
    }

    public function getNome(){
        return $this->nome;
    }

    public function listarDocumento(){
        foreach ($this->documento as $doc) {
            echo $doc->getTipo()." ".$doc->getNumero()."<br>";
        }
    }
}
