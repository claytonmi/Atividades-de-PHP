<?php

abstract class jedi{
    public $forca;
    public $sabre;
    public $planeta;
    public $nome;

    public function serJedi(){
        echo "Sendo Jedi";    
    }

    public abstract function verificarHierarquia();
    
}

class Padawan extends Jedi{
    public function verificarHierarquia(){
        echo "Sou Padawan";
    }
}

class Cavaleiro extends Jedi{
    public function verificarHierarquia(){
        echo "Sou Cavaleiro";
    }
}

$padawan = new Cavaleiro();
$padawan->serJedi();
$padawan->verificarHierarquia();