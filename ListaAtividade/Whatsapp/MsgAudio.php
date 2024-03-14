<?php

class MsgAudio extends Mensagem {
    private $duracao;

    public function __construct($id, $tipo, Contatinho $contatinho, $hora, $conteudo, $duracao) {
        parent::__construct($id, $tipo, $contatinho, $hora, $conteudo);
        $this->duracao = $duracao;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function enviar() {
        // Implementação do envio de mensagem de áudio
        echo "Enviando mensagem de áudio para " . $this->getContatinho()->getNome() . "<br>";
    }
}