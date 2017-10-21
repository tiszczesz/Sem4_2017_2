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
         ?>
        <form method="get">
            <label>Ilosć wierszy: </label>
            <input type="text" name="rows"/><br>
             <label>Ilosć kolumn: </label>
            <input type="text" name="cols"/><br>
            <input type="submit" value="Wykonaj"/>
        </form>
        
        <?php
        if(isset($_GET['rows']) && isset($_GET['cols'])){
            $rows = intval($_GET['rows']);
            $cols = intval($_GET['cols']);
            $rows = $rows<=0 || $rows>40 ? 20 : $rows;
            $cols = $cols<=0 || $cols>40 ? 20 : $cols;
            echo GenerTab($rows,$cols);
        }
        
        
        ?>
    </body>
</html>
