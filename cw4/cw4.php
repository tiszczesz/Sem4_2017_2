<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 4 pętle</title>
    </head>
    <body>
        <h1>Ćwiczenie 4 pętle</h1>
        <h3>Pętla for(  ;   ;  ){...} </h3>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<h{$i}>Nagłówek numer {$i} </h{$i}>\n";
        }
        echo '<br><select>';
        for ($i = 1; $i <= 10; $i++) {
            echo "<option>Element listy nr: {$i}</option>\n";
        }
        echo '</select>';
        ?>
        <h3>Pętla do{...}while(...)</h3>
        <?php
        $losowa = 0;
        $licznik = 0;
        $max = -PHP_INT_MAX;
        $min = PHP_INT_MAX;
        do {
            $losowa = rand(0, 3);
            echo $losowa . ' ';
            if ($losowa != 0) {
                $licznik++;
                if ($losowa > $max) {
                    $max = $losowa;
                }
                if ($losowa < $min) {
                    $min = $losowa;
                }
            }
        } while ($losowa != 0);
        if ($licznik > 0) {
            echo "<p>Ilość liczb: {$licznik}</p>\n";
            echo "<p>Maksymalna liczba: {$max}</p>\n";
            echo "<p>Minimalna liczba: {$min}</p>\n";
        }else{
            echo "<p>Zbiór pusty!!</p>\n";
        }
        ?>
        <h3>Pętla while(...){....}</h3>
        <?php
        $suma = 0;
        while ($suma < 100) {
            $losowa = rand(0, 20);
            $suma += $losowa;
            echo $losowa;
            if($suma<100){echo '+';}
        }
        echo "=" . $suma . '</br>';
        ?>
        <h3>Tabliczka mnożenia</h3>
        <?php
        $cols=30;
        $rows=40;
        
        ?>
    </body>
</html>
