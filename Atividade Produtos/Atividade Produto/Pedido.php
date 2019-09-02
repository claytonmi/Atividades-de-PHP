<?php


class Pedido{
    private $numero;
    private $itens;

    public function __construct(int $numero, Item $itens){
        $this->numero = $numero;
        $this->itens[] = $itens;
    }

    public function addItem(Item $itens){
        $this->itens[] = $itens;
    }
    public function listarItens(){
        foreach ($this->itens as $iten) {
            echo "QTD: ".$iten->getQuantidade()." - ( ".$iten->getProduto()->getDescricao()." ) <br/>";
        }
    }
}