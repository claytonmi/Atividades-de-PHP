<?php
require_once "Contatinho.php";
require_once "Whatsapp.php";
require_once "Mensagem.php";
require_once "MsgTexto.php";
require_once "MsgAudio.php";
require_once "MsgFoto.php";

$Contato = new Contatinho("Paulo", "999999");
$Contato2 = new Contatinho("Paula", "9999656");

$whats = new Whatsapp();
$whats->addContatinho($Contato);
$whats->addContatinho($Contato2);

$whats->addMensagem(1, 1, $Contato, "12:00", "Olá, tudo bem?");
$whats->addMensagem(2, 1, $Contato, "12:01", "Como você está?");
$whats->addMensagem(3, 1, $Contato2, "12:02", "Estou bem, obrigado!");

$whats->listarContatos();
$whats->listarMensagem();

