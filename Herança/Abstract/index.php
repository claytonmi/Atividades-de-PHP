<?php

require_once "Padwan.php";
require_once "Cavaleiro.php";

// Criando objetos
$anakin = new Padwan("Anakin Skywalker");
$obiWan = new Cavaleiro("Obi-Wan Kenobi");

// Exibindo informações
echo $anakin->treinar() . "<br>";
echo $anakin->getNome() . " é um " . $anakin->getRank() . "<br><br>";

echo $obiWan->treinar() . "<br>";
echo $obiWan->getNome() . " é um " . $obiWan->getRank();


