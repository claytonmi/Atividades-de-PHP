<?php
require_once "Urna.php";
require_once "Voto.php";
require_once "Candidato.php";



$Canditado = new Candidato("qualquer bosta","999999");
$Canditado2 = new Contatinho("teste 2","9999656");

$Voto = new MsgTexto(1,$Contato,"12:00","nunca nem vi!");
$Voto2 = new MsgFoto(2,$Contato2,"12:00","nunca nem vi!");

$Urna = new Whatsapp($Contato, $Mensage);
$Urna->addContatinho($Contato2);
$Urna->addMensagem($Mensage2);

$Urna->listarContatos();
$Urna->listarMensagem();