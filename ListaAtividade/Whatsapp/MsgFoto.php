<?php

class MsgFoto extends Mensagem{
    private $tamanho;

    public function toString(){}
 
  function __construct(int $tamanho, Contatinho $destinatario, string $horaEnvio, string $conteudo){
    $this->tamanho = $tamanho;
     parent::__construct($destinatario,  $horaEnvio,  $conteudo);
   }  
}
