<?php
class Worker{
    private $imie;
    private $nazwisko;
    private $pensja;
    public function __construct($imie="Adam",$nazwisko="Nowak",
            $pensja=3300) {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->pensja = $pensja;
    }
    public function __toString() {
        return "<div class='worker'> DANE PERSONALNE<br>"
        . "Imię: {$this->imie} Nazwisko: {$this->nazwisko}"
        . " Pensja: {$this->pensja}</div>";
    }
}
