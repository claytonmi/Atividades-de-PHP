<?php
require_once "Contatinho.php";
class Whatsapp {
    private $contatinhos = [];
    private $mensagens = [];

    public function addContatinho(Contatinho $contatinho) {
        $this->contatinhos[] = $contatinho;
    }

    public function addMensagem($id, $tipo, Contatinho $contatinho, $hora, $conteudo) {
        switch ($tipo) {
            case 1:
                $mensagem = new MsgTexto($id, $tipo, $contatinho, $hora, $conteudo);
                break;
            case 2:
                $mensagem = new MsgAudio($id, $tipo, $contatinho, $hora, $conteudo);
                break;
            case 3:
                $mensagem = new MsgFoto($id, $tipo, $contatinho, $hora, $conteudo);
                break;
            default:
                // Tratamento para tipos de mensagem desconhecidos
                return;
        }

        $this->mensagens[] = $mensagem;
    }

    public function listarContatos() {
        foreach ($this->contatinhos as $contatinho) {
            echo "Nome: " . $contatinho->getNome() . ", Número: " . $contatinho->getNumero() . "<br>";
        }
    }

    public function listarMensagem() {
        foreach ($this->mensagens as $mensagem) {
            echo "ID: " . $mensagem->getId() . ", Tipo: " . $mensagem->getTipo() . ", Conteúdo: " . $mensagem->getConteudo() . "<br>";
        }
    }
}
