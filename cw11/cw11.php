<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <label>Poda liczbę: </label>
            <input type="text" name="liczba"/><br>
            <input type="submit" value="Generuj"/>
        </form>
        <?php
        require_once 'functions.php';
        var_dump($_POST);
        if(isset($_POST['liczba'])){
            
            $liczba = intval($_POST['liczba']);
            if($liczba>2 && $liczba<2000){
                $pierwsze = GetPierwsze($liczba);
                echo implode(' ', $pierwsze);
                SaveToFile($pierwsze,"pierwsze.txt");
            }            
        }
        ?>
    </body>
</html>
