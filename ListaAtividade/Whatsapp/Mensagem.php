<?php

abstract class Mensagem{
    protected $destinatario;
    protected $horaEnvio;
    protected $conteudo;

    function __construct(Contatinho $destinatario, string $horaEnvio, string $conteudo){
        $this->destinatario = $destinatario;
        $this->horaEnvio = $horaEnvio;
        $this->conteudo = $conteudo;
    }

    public function getConteudo(){
        return $this->conteudo;
    }

    public abstract function  toString();
}
