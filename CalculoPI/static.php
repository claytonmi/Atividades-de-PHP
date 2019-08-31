<?php

class areaCalc{
    public static $pi = 3.141517;

    public static function areaCircunferencia($raio){
        return self::$pi * ($raio * $raio);
    }

}

echo areaCalc::areaCircunferencia(5);