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
        for($i=1; $i<=6; $i++){
           echo "<h{$i}>Nagłówek numer {$i} </{$i}h>"; 
        }
        echo '<br><select>';
        for($i=1; $i<=10; $i++){
            echo "<option>Element listy nr: {$i}</option>\n";
        }
        echo '</select>';
        ?>
    </body>
</html>
