<?php
require_once 'Jedi.php';
class Padwan extends Jedi {
    public function treinar() {
        $this->rank = "Padawan";
        return "O Padawan " . $this->nome . " está treinando para se tornar um Cavaleiro Jedi.";
    }
}

