<?php
require_once "Contatinho.php";
require_once "Whatsapp.php";
require_once "Mensagem.php";
require_once "MsgTexto.php";
require_once "MsgAudio.php";
require_once "MsgFoto.php";


$Contato = new Contatinho("qualquer bosta","999999");
$Contato2 = new Contatinho("teste 2","9999656");

$Mensage = new MsgTexto(1,$Contato,"12:00","nunca nem vi!");
$Mensage2 = new MsgFoto(2,$Contato2,"12:00","nunca nem vi!");

$whats = new Whatsapp($Contato, $Mensage);
$whats->addContatinho($Contato2);
$whats->addMensagem($Mensage2);

$whats->listarContatos();
$whats->listarMensagem();