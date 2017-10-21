<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        if(filter_has_var(INPUT_GET, 'rows')){
            
        }
        if(isset($_GET['rows']) && isset($_GET['cols'])){
             $rows = $_GET['rows'];
            $cols = $_GET['cols'];
        }
        var_dump($_GET);
        print_r($_GET);
       
        ?>
        </pre>
    </body>
</html>
