<?php
// Exemplo de manipulação de variáveis em PHP

// Declaração de variáveis
$nome = "João";
$idade = 25;
$altura = 1.75;
$peso = 70;
$ativo = true;

// Exibição dos valores das variáveis
echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Altura: " . $altura . " metros <br>";
echo "Peso: " . $peso . " kg <br>";

// Verificação de condição e exibição de mensagem
if ($ativo) {
    echo "Status: Ativo <br>";
} else {
    echo "Status: Inativo <br>";
}

// Operações matemáticas
echo "IMC: " . ($peso / ($altura * $altura)) . "<br>"; // Cálculo do Índice de Massa Corporal (IMC)

// Concatenação de strings
$mensagem = "Olá, meu nome é " . $nome . ", tenho " . $idade . " anos.";
echo $mensagem;