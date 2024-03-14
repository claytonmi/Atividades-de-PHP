<?php
// Exemplo de definição e chamada de funções em PHP

// Definição de função simples
function digaOla() {
    echo "Olá! <br>";
}

// Chamada de função
digaOla();

// Função com parâmetros
function somar($a, $b) {
    return $a + $b;
}

// Chamada de função com parâmetros
$resultado = somar(10, 5);
echo "Resultado da soma: $resultado <br>";

// Função com valor padrão para parâmetros
function saudacao($nome = "usuário") {
    echo "Olá, $nome! <br>";
}

// Chamada de função com e sem parâmetros
saudacao();
saudacao("Maria");

// Função com retorno de array
function obterNumeros() {
    return array(1, 2, 3, 4, 5);
}

// Chamada de função com retorno de array
$numeros = obterNumeros();
echo "Números obtidos: " . implode(", ", $numeros) . "<br>";

