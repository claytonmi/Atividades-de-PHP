<?php

Class Urna{
		private $secao;
		private $zona;
		private $votos;
		
	function __construct(int $secao,int $zona){
		$this->secao = $secao;
		$this->zona = $zona;
		$this->votos = array();
	}

	public function addVotos(Candidato $candidato){
	    if ($voto == null){
	    	$Voto = new Voto();
	    }	
            $this->votos[] = $candidato;
        }


	public function relatorio(){
            $aux = 17;
			echo "Seção: ".$this->secao."<br/>";
			echo "Zona: ".$this->zona."<br/>";
            $cont17 = 0;
            $cont13 = 0;
            foreach ($this->votos as $voto){
                if($voto->getCandidato()->getNumero() == 17){
                    $cont17 ++;
                }else{
                    $cont13++;
                }
            }
            foreach ($this->votos as $voto){
                if($voto->getCandidato()->getNumero() == $aux) {
                    echo "Candidato: ".$voto->getCandidato()->getNumero()." - ".$voto->getCandidato()->getNome()." - Total de votos: ".$cont17."<br/>";
                    $aux=13;
                }
                foreach ($this->votos as $voto) {
                    if ($voto->getCandidato()->getNumero() == $aux) {
                        $aux = 0;
                        echo "Candidato: " . $voto->getCandidato()->getNumero() . " - " . $voto->getCandidato()->getNome() . " - Total de votos: " . $cont13 . "<br/>";
                    }
                }


            }
		}
}
	
