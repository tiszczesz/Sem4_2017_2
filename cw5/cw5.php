<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 5 funkcje</title>
        <style>
            table{border-collapse: collapse;}
            td{padding: 3px; border: solid 1px gray;}
            td.wyr{color: cadetblue; background-color: #000033;}
        </style>
    </head>
    <body>
        <h1>Ćwiczenie 5 funkcje</h1>
        <?php
        require_once 'functions.php';
        echo GenerList(["czerwony","biały","zielony",
            "żółty","pomarańczowy"],false);
        echo GenerTab(12, 15);
        ?>
    </body>
</html>
