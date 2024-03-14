<?php
// Context.php

class Context {
    private $strategy;

    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function executeStrategy() {
        return $this->strategy->doOperation();
    }
}