<?php
abstract class Mensagem {
    private $id;
    private $tipo;
    private $contatinho;
    private $hora;
    private $conteudo;

    public function __construct($id, $tipo, Contatinho $contatinho, $hora, $conteudo) {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->contatinho = $contatinho;
        $this->hora = $hora;
        $this->conteudo = $conteudo;
    }

    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getContatinho() {
        return $this->contatinho;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    // Método abstrato para ser implementado pelas subclasses
    abstract public function enviar();
}
