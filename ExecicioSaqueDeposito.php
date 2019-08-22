<?php

class Conta{
    public $numero;
    public $saldo;
    public $limite;
    
    public function sacar(float $valor){
        if($valor>0){
            if($valor<=$this->saldo){
                $this->saldo = $this->saldo-$valor;
                echo "<br/>Saque de: R$".$valor.", realizado com sucesso!";
            }else{
                echo "<br/>Não há saldo disponivel!, seu saldo é de:".$this->saldo;
            }
        }
    }

    public function depositar(float $valor){
        if($valor>0){
            $this->saldo += $valor;
            echo "<br/>Deposito realizado com sucesso!";
        }
    }

    public function imprimirExtrato(){
      echo "<br/>|------------------------------|<br/>";
      echo "Nome: ".$this->numero ."<br/>";
      echo "Saldo: ".$this->saldo ."<br/>";
      echo "Limite: ".$this->limite ."<br/>";
      echo "|------------------------------|";
    }

    public function __construct(int $numero=1,float $saldo=200, float $limite=0){
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->limite = $limite;
    }
}

$conta = new Conta(001,1000,1500);
$conta->imprimirExtrato();
$conta->depositar(100);
$conta->imprimirExtrato();
$conta->sacar(200);
$conta->imprimirExtrato();
