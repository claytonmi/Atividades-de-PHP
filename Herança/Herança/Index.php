<?php

require_once "Conta.php";
require_once "Poupanca.php";

// Criando uma conta poupança
$poupanca = new Poupanca(1000, 5); // Saldo inicial de 1000 e juros de 5%

// Realizando operações na conta poupança
echo "Saldo inicial: " . $poupanca->getSaldo() . "<br>"; // Exibirá 1000
$poupanca->depositar(500); // Depositar 500
echo "Saldo após depósito: " . $poupanca->getSaldo() . "<br>"; // Exibirá 1500
$poupanca->sacar(200); // Sacar 200
echo "Saldo após saque: " . $poupanca->getSaldo() . "<br>"; // Exibirá 1300
$poupanca->aplicarJuros(); // Aplicar juros de 5%
echo "Saldo após aplicação de juros: " . $poupanca->getSaldo(); // Exibirá 1365 (juros de 5% sobre 1300)
