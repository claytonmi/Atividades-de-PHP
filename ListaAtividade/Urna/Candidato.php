<?php

Class Candidato{
		private $numero;
		private $nome;
		private $cargo;


    public function getNumero(): int
    {
        return $this->numero;
    }


    public function getNome(): string
    {
        return $this->nome;
    }


    public function getCargo(): int
    {
        return $this->cargo;
    }
		
		function __construct(int $numero, string $nome, int $cargo){
				$this->numero = $numero;
				$this->nome = $nome;
				$this->cargo = $cargo;
		}


}