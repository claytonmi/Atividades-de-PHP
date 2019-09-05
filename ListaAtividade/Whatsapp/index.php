<?php
require_once "Contatinho.php";
require_once "Whatsapp.php";
require_once "Mensagem.php";
require_once "MsgTexto.php";
require_once "MsgAudio.php";
require_once "MsgFoto.php";


$Contato = new Contatinho("Paulo","999999");
$Contato2 = new Contatinho("Paula","9999656");

//$Mensage = new MsgTexto(1,$Contato,"12:00","Mensagem um!");
//$Mensage2 = new MsgFoto(2,$Contato2,"12:00","Mensagem dois!");

$whats = new Whatsapp();
$whats->addContatinho($Contato);
$whats->addContatinho($Contato2);

$whats->addMensagem(1,12,$Contato,"12:00","Palmeiras não tem mundial!");
$whats->addMensagem(2,15,$Contato,"12:01","Palmeiras não tem mundial!");
$whats->addMensagem(3,15,$Contato,"12:02","Palmeiras não tem mundial!");

$whats->addMensagem(1,15,$Contato2,"12:00","Palmeiras não tem mundial!");
$whats->addMensagem(2,13,$Contato2,"12:01","Palmeiras não tem mundial!");
$whats->addMensagem(3,19,$Contato2,"12:02","Palmeiras não tem mundial!");

$whats->listarContatos();
$whats->listarMensagem();


