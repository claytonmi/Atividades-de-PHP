<?php
// Exemplos de manipulação de arrays em PHP

// Definição de um array
$frutas = array("Maçã", "Banana", "Laranja", "Abacaxi");

// Acessando elementos do array
echo "A segunda fruta é: " . $frutas[1] . "<br>";

// Adicionando elemento ao final do array
$frutas[] = "Morango";

// Iterando sobre elementos do array com foreach
echo "Frutas disponíveis: <br>";
foreach ($frutas as $fruta) {
    echo "- $fruta <br>";
}

// Verificando se um elemento existe no array
if (in_array("Banana", $frutas)) {
    echo "A fruta Banana está disponível. <br>";
} else {
    echo "A fruta Banana não está disponível. <br>";
}

// Obtendo o tamanho do array
$tamanho = count($frutas);
echo "O array possui $tamanho elementos. <br>";

// Removendo um elemento do array
unset($frutas[2]);

// Iterando sobre elementos do array após a remoção
echo "Frutas disponíveis após a remoção: <br>";
foreach ($frutas as $fruta) {
    echo "- $fruta <br>";
}

// Ordenando o array
sort($frutas);

// Iterando sobre elementos do array ordenado
echo "Frutas disponíveis após a ordenação: <br>";
foreach ($frutas as $fruta) {
    echo "- $fruta <br>";
}

