<?php
// Exemplo de definição e utilização de classes e objetos em PHP

// Definição da classe Pessoa
class Pessoa {
    // Propriedades da classe
    public $nome;
    public $idade;

    // Método construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método da classe
    public function apresentar() {
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos. <br>";
    }
}

// Criação de objetos da classe Pessoa
$pessoa1 = new Pessoa("João", 25);
$pessoa2 = new Pessoa("Maria", 30);

// Chamada do método da classe
$pessoa1->apresentar();
$pessoa2->apresentar();
