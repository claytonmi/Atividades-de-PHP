<?php
// Singleton.php

class Singleton {
    private static $instance;

    // Método para obter a única instância da classe
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Impede a criação de instâncias da classe fora da classe
    private function __construct() {}

    // Impede a clonagem da instância da classe
    private function __clone() {}

    // Impede a desserialização da instância da classe
    public  function __wakeup() {}

    // Método de exemplo da classe
    public function doSomething() {
        echo "Singleton está fazendo algo... <br>";
    }
}
