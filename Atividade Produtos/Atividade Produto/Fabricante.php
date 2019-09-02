<?php


class Fabricante{
    private $nome;
    private $endereco;
    private $documento;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function __construct(string $nome,string $endereco, string $documento){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->documento = $documento;
    }

}