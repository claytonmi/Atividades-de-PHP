<?php


class Item{
    private $produto;
    private $quantidade;

    public function __construct(Produto $produto, int $quantidade){
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

}