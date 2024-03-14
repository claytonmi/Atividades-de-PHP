<?php

class Circulo {
    // Método estático para calcular a área de um círculo
    public static function calcularArea($raio) {
        return pi() * pow($raio, 2);
    }
}
