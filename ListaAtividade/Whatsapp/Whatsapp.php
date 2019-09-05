<?php

Class Whatsapp{
    private $contatinho;
    private $mensagem;
    
    // contrutor da class
    function __construct(){
        $this->contatinho = array();
        $this->mensagem = array();
    }
int $numChar, Contatinho $destinatario, string $horaEnvio, string $conteudo
    public function addMensagem(int $tipo,int $info,Contatinho $contato, String $hora, String $conteudo){
		if (tipo == 1 ){
			$Mensage = new MsgTexto($info,$contato,$hora,$conteudo);
		}else if (tipo == 2 ){
			$Mensage = new MsgAudio($info,$contato,$hora,$conteudo);
		}else if (tipo == 3 ){
			$Mensage = new Msg Foto($info,$contato,$hora,$conteudo);
		}
		$this->mensagem[] = $Mensage;        
    }

    public function addContatinho(Contatinho $contatinho){
        $this->contatinho[] = $contatinho;
    }


    public function getContatinho(): Contatinho
    {
        return $this->contatinho;
    }


    public function getMensagem(): Mensagem
    {
        return $this->mensagem;
    }

    public function listarContatos(){
        foreach ($this->contatinho as $cont) {
            echo $cont->getNome()."<br>";
        }
    }

    public function listarMensagem(){
        foreach ($this->mensagem as $me) {
            echo $me->getConteudo()."<br>";
        }
    }
}