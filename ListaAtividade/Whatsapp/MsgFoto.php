<?php

class MsgFoto extends Mensagem {
    private $url;

    public function __construct($id, $tipo, Contatinho $contatinho, $hora, $conteudo, $url) {
        parent::__construct($id, $tipo, $contatinho, $hora, $conteudo);
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

    public function enviar() {
        // Implementação do envio de mensagem de foto
        echo "Enviando mensagem de foto para " . $this->getContatinho()->getNome() . "<br>";
    }
}