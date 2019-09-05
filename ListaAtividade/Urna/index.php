<?php

require_once "Candidato.php";
require_once "Voto.php";
require_once "Urna.php";

$Canditado = new Candidato(17, "Jose Paulo", 1);
$Canditado2 = new Candidato(13, "Paulinho", 1);

$Urna = new Urna(1, 10);
$Urna->addVotos($Canditado);
$Urna->addVotos($Canditado);
$Urna->addVotos($Canditado);
$Urna->addVotos($Canditado);
$Urna->addVotos($Canditado2);
$Urna->addVotos($Canditado2);
$Urna->addVotos($Canditado2);

$Urna->relatorio();
