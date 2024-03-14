<?php

require_once "static.php";

$raio = 5;
$area = Circulo::calcularArea($raio);
echo "A área do círculo com raio $raio é: $area";