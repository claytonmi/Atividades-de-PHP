<?php

class MsgTexto extends Mensagem {
    public function __construct($id, $tipo, Contatinho $contatinho, $hora, $conteudo) {
        parent::__construct($id, $tipo, $contatinho, $hora, $conteudo);
    }

    public function enviar() {
        // Implementação do envio de mensagem de texto
        echo "Enviando mensagem de texto para " . $this->getContatinho()->getNome() . "<br>";
    }
}