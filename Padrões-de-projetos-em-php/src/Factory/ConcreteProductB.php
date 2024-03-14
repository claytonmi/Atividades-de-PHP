<?php
// ConcreteProductB.php


require_once 'AbstractProduct.php';

class ConcreteProductB extends AbstractProduct {
    public function operation() {
        return "Produto B criado.";
    }
}