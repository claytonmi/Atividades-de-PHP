<?php

Class Candidato{
		private $numero;
		private $nome;
		private $cargo;
		
		function __construct(int $numero, string $nome, int $cargo){
				$this->numero = $numero;
				$this->nome = $nome;
				$this->cargo = $cargo;
		}

}