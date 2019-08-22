<?php
class carrinho{
    private $produtos;
    function __construct(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function addProduto(Produto $produto){
        $this->produtos[] = $produto;
    }


    public function listarProdutos(){
        foreach ($this->produtos as $prod) {
            echo $prod->getNome()."....R$ ".number_format($prod->getValor(),2,",",".")."<br>";
        }
    }
}