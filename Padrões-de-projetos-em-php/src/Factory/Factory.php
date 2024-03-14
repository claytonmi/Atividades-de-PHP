<?php
// Factory.php
require_once 'ConcreteProductA.php';
require_once 'ConcreteProductB.php';
class Factory {
    public static function createProduct($type) {
        switch ($type) {
            case 'A':
                return new ConcreteProductA();
            case 'B':
                return new ConcreteProductB();
            default:
                throw new Exception("Tipo de produto desconhecido.");
        }
    }
}