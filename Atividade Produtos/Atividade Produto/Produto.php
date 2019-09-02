<?php

class Produto{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function setFabricante(Fabricante $fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function __construct(string $descricao, float $estoque, float $preco, Fabricante $fabricante, Caracteristicas $caracteristicas){
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
        $this->caracteristicas[] = $caracteristicas;
    }

    public function addCaracteristicas(Caracteristicas $caracteristicas){
      $this->caracteristicas[] = $caracteristicas;
    }

}