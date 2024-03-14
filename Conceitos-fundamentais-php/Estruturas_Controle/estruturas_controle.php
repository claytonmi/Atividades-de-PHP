<?php
// Exemplo de estruturas de controle em PHP

// Exemplo de if-else
$idade = 18;
if ($idade >= 18) {
    echo "Você é maior de idade <br>";
} else {
    echo "Você é menor de idade <br>";
}

// Exemplo de if-elseif-else
$nota = 7;
if ($nota >= 7) {
    echo "Aprovado <br>";
} elseif ($nota >= 5) {
    echo "Recuperação <br>";
} else {
    echo "Reprovado <br>";
}

// Exemplo de switch-case
$diaSemana = "segunda";
switch ($diaSemana) {
    case 'segunda':
        echo "É segunda-feira <br>";
        break;
    case 'terça':
        echo "É terça-feira <br>";
        break;
    case 'quarta':
        echo "É quarta-feira <br>";
        break;
    default:
        echo "Não é segunda, terça ou quarta-feira <br>";
        break;
}

// Exemplo de loop while
$contador = 1;
while ($contador <= 5) {
    echo "Contador: $contador <br>";
    $contador++;
}

// Exemplo de loop for
for ($i = 1; $i <= 5; $i++) {
    echo "Contador: $i <br>";
}

// Exemplo de loop foreach
$numeros = array(1, 2, 3, 4, 5);
foreach ($numeros as $numero) {
    echo "Número: $numero <br>";
}