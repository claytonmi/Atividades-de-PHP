<?php

// class whatsapp
Class Whatsapp{
    private $contatinho;
    private $mensagem;
    // contrutor da class
    function __construct(Contatinho $contatinho,Mensagem  $mensagem){
        $this->contatinho = ;
        $this->mensagem = $mensagem;        
    }

    public function addMensagem(Mensagem $mensagem){
        $this->mensagem = $mensagem;
    }

    public function addContatinho(Contatinho $contatinho){
        $this->contatinho[] = $contatinho;
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

    function __construct(string $nome, string $celular){
        $this->nome = $nome;
        $this->celular= $celular;
    }

    public function getNome(){
        return $this->nome;
    }   
}

abstract class Mensagem{
    private $destinatario;
    private $horaEnvio;
    private $conteudo;

    function __construct(Contatinho $destinatario, string $horaEnvio, string $conteudo){
        $this->destinatario = $destinatario;
        $this->horaEnvio = $horaEnvio;
        $this->conteudo = $conteudo;
    }

    public abstract function  toString();
}

class MsgTexto extends Mensagem{
    private $numChar;

    public function toString(){}
        function __construct(int $numChar, Contatinho $destinatario, string $horaEnvio, string $conteudo){
            $this->numChar = $numChar;
            parent::__construct($destinatario,  $horaEnvio,  $conteudo);
        }        
}

class MsgAudio extends Mensagem{
    private $duracao;
    public function toString(){ }
    function __construct(int $nduracaoumChar, Contatinho $destinatario, string $horaEnvio, string $conteudo){
        $this->duracao = $duracao;
        parent::__construct($destinatario,  $horaEnvio,  $conteudo);
    }
}

class MsgFoto extends Mensagem{
    private $tamanho;

    public function toString(){}
 
  function __construct(int $tamanho, Contatinho $destinatario, string $horaEnvio, string $conteudo){
    $this->tamanho = $tamanho;
     parent::__construct($destinatario,  $horaEnvio,  $conteudo);
   }  
}


$Contato = new Contatinho("teste","999999");
$Contato2 = new Contatinho("teste2","9999656");

$Mensage = new MsgTexto(1,$Contato,"12:00","nunca nem vi!");
$Mensage2 = new MsgFoto(2,$Contato2,"12:00","nunca nem vi!");

$whats = new Whatsapp($Contato,"teste");

$whats->listarContatos();