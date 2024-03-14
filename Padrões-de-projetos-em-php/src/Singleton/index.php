<?php
// index.php

require_once 'Singleton.php';

// Obtendo a instância do Singleton
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

// Verificando se as duas instâncias são iguais
if ($singleton1 === $singleton2) {
    echo "As duas instâncias são idênticas. <br>";
} else {
    echo "As duas instâncias são diferentes. <br>";
}

// Fazendo algo com o Singleton
$singleton1->doSomething();

