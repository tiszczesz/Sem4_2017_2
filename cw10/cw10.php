<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $f = fopen("licznik.txt", 'r');
         $licznik=0;
         if($f){
             $licznik = intval(fgets($f));
             $licznik++;             
             fclose($f);
         }
          echo "<h3>Licznik odwiedzin: {$licznik}</h3>\n";
          $f  = fopen('licznik.txt', 'w');
          if($f){
              fwrite($f, $licznik);
              fclose($f);
          }
        ?>
    </body>
</html>
