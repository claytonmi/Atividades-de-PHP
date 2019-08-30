<?php


Class Whatsapp{
    private $contatinho;
    private $mensagem;

    function __construct(Contatinho $contatinho,Mensagem  $mensagem){
        $this->$contatinho = $contatinho;
        $this->$contatinho = $contatinho;        
    }

    public function listarContatos(){
        foreach ($this->contatinho as $cont) {
            echo $cont->getNome()."<br>";
        }
    }

    public function listarMensagem(){
        foreach ($this->mensagem as $me) {
            echo $me->getMensagem()."<br>";
        }
    }
}

class Contatinho{
    private $nome;
    private $celular;

    function __construct(string $nome, int $celular){
        $this->nome = $nome;
        $this->celular= $celular;
    }
}

abstract class Mensagem{
    private $destinatario;
    private $horaEnvio;
    private $conteudo;

    public function toString(){

    }
}

class MsgTexto extends Mensagem{
    private $numChar;
}

class MsgAudio extends Mensagem{
    private $duracao;
}

class MsgFoto extends Mensagem{
    private $tamanho;
}