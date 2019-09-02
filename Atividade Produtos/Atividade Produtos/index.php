<?php

require_once "Produto.php";
require_once "Fabricante.php";
require_once "Caracteristicas.php";
require_once "Item.php";
require_once "Pedido.php";

$fabricant = new Fabricante("Teste Fabrica","Rua teste", "Documento teste" );
$caracteristicas = new Caracteristicas("caixa","Unidade");
$caracteristicas2 = new Caracteristicas("Lata","Unidade");
$caracteristicas3 = new Caracteristicas("PCT","Unidade");
$caracteristicas4 = new Caracteristicas("Rolo","Metro");
$caracteristicas5 = new Caracteristicas("cor preto","0");

$produto = new Produto("Produto 1", 25.5 , 1.5, $fabricant,$caracteristicas4);
$produto->addCaracteristicas($caracteristicas5);

$produto2 = new Produto("Produto 2", 5 , 6, $fabricant,$caracteristicas2);
$produto2->addCaracteristicas($caracteristicas);

$produto3 = new Produto("Produto 3", 20 , 50, $fabricant,$caracteristicas3);

$item = new Item($produto,2);
$item2 = new Item($produto2,10);
$item3 = new Item($produto3,6);

$pedido = new Pedido(1,$item);
$pedido->addItem($item2);
$pedido->addItem($item3);

echo $pedido->listarItens();



