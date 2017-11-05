<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'functions.php';
        $dane = getAllWorkers();
        echo WorkersToTable($dane);
        ?>
    </body>
</html>
