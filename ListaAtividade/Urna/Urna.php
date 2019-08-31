<?php

Class Urna{
		private $secao;
		private $zona;
		private $votos;
		
		function __construct(int $secao,int $zona, Voto $voto){
				$this->secao = $secao;
				$this->zona = $zona;
				$this->votos = $voto;
		}
		
		public function relatorio(){
			
			
		}	
	
}
	