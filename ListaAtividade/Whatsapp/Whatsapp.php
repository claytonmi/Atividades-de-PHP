<?php

Class Whatsapp{
    private $contatinho;
    private $mensagem;
    
    // contrutor da class
    function __construct(Contatinho $contatinho,Mensagem  $mensagem){
        $this->contatinho[] = $contatinho;
        $this->mensagem[] = $mensagem;
    }

    public function addMensagem(Mensagem $mensagem){
        $this->mensagem[] = $mensagem;
    }

    public function addContatinho(Contatinho $contatinho){
        $this->contatinho[] = $contatinho;
    }


    public function getContatinho(): Contatinho
    {
        return $this->contatinho;
    }


    public function setContatinho(Contatinho $contatinho)
    {
        $this->contatinho = $contatinho;
    }


    public function getMensagem(): Mensagem
    {
        return $this->mensagem;
    }


    public function setMensagem(Mensagem $mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function listarContatos(){
        foreach ($this->contatinho as $cont) {
            echo $cont->getNome()."<br>";
        }
    }

    public function listarMensagem(){
        foreach ($this->mensagem as $me) {
            echo $me->getConteudo();
        }
    }
}