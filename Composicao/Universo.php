<?php
class Universo{
    private $nome;
    private $planeta;

    function __construct(string $nome){
        $this->nome = $nome;
        $this->planeta= [];
    }

    public function addPlanetas(string $nomePlaneta){
        $this->planeta[] = new Planeta($nomePlaneta);
    }

    public function listarPlanetas(){
        foreach($this->planeta as $planeta){
            echo $planeta->getNome()."<br>";
        }
    }
}