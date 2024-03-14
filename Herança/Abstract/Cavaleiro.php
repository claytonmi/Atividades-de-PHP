<?php
require_once 'Jedi.php';
class Cavaleiro extends Jedi {
    public function treinar() {
        $this->rank = "Cavaleiro Jedi";
        return "O Cavaleiro Jedi " . $this->nome . " está aprimorando suas habilidades.";
    }
}

