<?php

class MsgAudio extends Mensagem{
    private $duracao;
    
    public function toString(){ }

    function __construct(int $nduracaoumChar, Contatinho $destinatario, string $horaEnvio, string $conteudo){
        $this->duracao = $duracao;
        parent::__construct($destinatario,  $horaEnvio,  $conteudo);
    }
}