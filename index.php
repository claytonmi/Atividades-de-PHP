<?php
require_once "Produto.php";
require_once "Carrinho.php";

$maca = new Produto("maçã", 0.35);
$xuxu = new Produto("xuxu", 0.001);
$hotwheels = new Produto("Hot Wheels",8);

$carrinho = new  Carrinho($maca);
$carrinho->addProduto($xuxu);
$carrinho->addProduto($hotwheels);
$carrinho->listarProdutos();