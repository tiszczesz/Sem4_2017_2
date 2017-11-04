<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Ksiazka{
            private $tytul;
            private $autor;
            private $rokWydania;
            public function __construct($tytul="Brak tytułu",
                    $autor="Adam Nowak",$rokWydania=2010) {
                $this->tytul = $tytul;
                $this->autor = $autor;
                $this->rokWydania = $rokWydania;
            }
            public function __toString() {
                $html = "<div class='book'>Informacje o książce:<br>"
                        . "Tytuł: {$this->tytul}<br>"
                        . "Autor: {$this->autor}<br>"
                        . "Rok wydania: {$this->rokWydania}</div>";
                return $html;
            }
            public function SetTytul($nowyTytul){
                $this->tytul = $nowyTytul;
            }
        }
        $b1 = new Ksiazka("ABC PHP", "Kowalski Tomasz", 2017);
        echo $b1;
        $b1->SetTytul("aldfsdfs sd ");
        echo $b1;
        ?>
    </body>
</html>
