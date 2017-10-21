<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablice w php</title>
    </head>
    <body>
        <pre>
        <h3>Tworzenie tablicy</h3>
        <?php
        $t1 = array(23,889,56,"34343",34,"ala");
        $t2 = [5,353,353,56,"fgfg",true,[23,32,232]];
        print_r($t1);
        print_r($t2);
        ?>
        <h3>Dodawanie i usuwanie elementów do tablicy</h3>
        <?php
        array_push($t1, "nowy","nowszy");
        print_r($t1);
        $t2[] = "dodany";
        $t2[12] = "dwunasty";
        $t2[2] = "zmieniony";
        $t2[10] = "10";
        unset($t2[1]);
        print_r($t2);
        $workers = [
            ["Adam","Nowak",3900],
            ["Monika","Hyra",5900],
            ["Anna","Pawelska",5500],
        ];
        
        print_r($workers);
        ?>
        </pre>
        <?php
        require_once 'functions.php';
        echo WorkersToTab($workers,true);
        ?>
    </body>
</html>
