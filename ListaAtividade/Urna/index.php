<?php

require_once "Candidato.php";
require_once "Voto.php";
require_once "Urna.php";

$Canditado = new Candidato(17, "Jose Paulo", 17);
$Canditado2 = new Candidato(13, "Paulinho", 13);

$Voto = new Voto($Canditado);
$Voto2 = new Voto($Canditado2);

$Urna = new Urna(1, 10, $Voto);
$Urna->addVotos($Voto);
$Urna->addVotos($Voto);
$Urna->addVotos($Voto);
$Urna->addVotos($Voto);
$Urna->addVotos($Voto2);
$Urna->addVotos($Voto2);
$Urna->addVotos($Voto2);

$Urna->relatorio();
