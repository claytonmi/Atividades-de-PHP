<?php

class Anakin{
    public $força;
    public $sabre;

    public function serJedi(){
        echo "Sendo jedi";
    }

}

class Luke extends Anakin{
  
}

$jedi = new Anakin();
$jedi->serJedi();
$jedi->forca= "lado Negro";
$jedi->sabre= "Vermelho";

print_r($jedi);