<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            a = 
            <input type="text" name="a"/>
            b = 
            <input type="text" name="b"/><br>
            <input type="submit" value="Oblicz"/>
        </form>
        <?php
        if(isset($_POST['a'])){
            $a = intval($_POST['a']);
            $b = intval($_POST['b']);
            if($a!=0 && $b!=0){
                while($b!=0){
                    $temp = $a;
                    $a = $b;
                    $b = $temp % $b;
                }
                echo "<p>Największy wspólny dzielnik: {$a}</p>";
            }else{
                echo "<p>Błędne dane!!!!</p>";
            }
        }
        ?>
    </body>
</html>
