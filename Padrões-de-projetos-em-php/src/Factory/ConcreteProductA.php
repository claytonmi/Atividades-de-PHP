<?php
// ConcreteProductA.php

require_once 'AbstractProduct.php';

class ConcreteProductA extends AbstractProduct {
    public function operation() {
        return "Produto A criado.";
    }
}