<?php

class Voto{
		private $candidato;

     public function getCandidato()
    {
        return $this->candidato;
    }

		function __construct(Candidato $candidato){
			$this->candidato = $candidato;
		}


}	