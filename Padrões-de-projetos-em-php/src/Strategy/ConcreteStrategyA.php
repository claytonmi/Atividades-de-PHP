<?php
// ConcreteStrategyA.php

require_once 'Strategy.php';

class ConcreteStrategyA implements Strategy {
    public function doOperation() {
        return "Executando a estratégia A.\n";
    }
}