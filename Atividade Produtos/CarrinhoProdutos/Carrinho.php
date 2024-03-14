<?php
class carrinho{
    private $produtos;
    function __construct(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function addProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function listarProdutos() {
        foreach ($this->produtos as $produto) {
            echo "Produto: " . $produto->getNome() . ", Preço: R$ " . $produto->getPreco() . "<br>";
        }
    }
}
