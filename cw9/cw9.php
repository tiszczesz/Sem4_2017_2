<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $filename = "dane.txt";
        require_once 'functions.php';
        echo DaneToParagraphs(LoadFromFile($filename));
        $daneDoZapisu = ["ala ma kota","bardzo sdfsfsfsf"];
        AddToFile($daneDoZapisu, $filename);
        ?>
    </body>
</html>
