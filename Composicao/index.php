<?php

require_once "Planeta.php";
require_once "Universo.php";

$universo = new Universo("42");
$universo->addPlanetas("Planeta xuxa");
$universo->addPlanetas("Planeta dos Macacos");
$universo->addPlanetas("Capitão Planeta");

$universo->listarPlanetas();