<?php

class Conta{
     private $numero;
 //   private $saldo;
     protected $saldo; 
    
    function __construct(int $numero, float $valor){
        $this->numero = $numero;
        $this->saldo = $valor;        
    }
    
    public function depositar(float $valor){
        $this->saldo += $valor;
    }

    public function transferir(Conta $contaDestino, float $valor){

    }

    public function sacar(floar $valor){

        if($this->saldo!=0 && $this->saldo > $valor){
            $this->saldo -= $valor;
        }
    }

    public function verificarSaldo(){
        echo $this->saldo;
    }

}

class Poupanca extends Conta{
    private $juros;

    function __construct(int $numero, float $valor, float $juros){
        parent::__construct($numero, $valor);
        $this->juros = $juros;

    }

    public function atualizarJuros(){
        $this->saldo += $this->saldo * ($this->juros / 100);        
    }
}

$Poup = new Poupanca(1254,0,5);
$Poup->depositar(500.00);
$Poup->atualizarJuros();
$Poup->verificarSaldo();