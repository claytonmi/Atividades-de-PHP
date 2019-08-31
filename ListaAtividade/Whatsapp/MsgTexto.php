<?php

class MsgTexto extends Mensagem{
    private $numChar;

    public function toString(){}

        function __construct(int $numChar, Contatinho $destinatario, string $horaEnvio, string $conteudo){
            $this->numChar = $numChar;
            parent::__construct($destinatario,  $horaEnvio,  $conteudo);
        }        
}