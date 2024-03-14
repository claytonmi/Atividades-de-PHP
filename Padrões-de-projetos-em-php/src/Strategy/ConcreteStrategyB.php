<?php
// ConcreteStrategyB.php

require_once 'Strategy.php';

class ConcreteStrategyB implements Strategy {
    public function doOperation() {
        return "Executando a estratégia B.\n";
    }
}