<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form method="post">
                <fieldset>
                    <legend>Dodaj nową usługę</legend> 
                    <div class="line">
                        <label>Nazwa:</label>
                        <input type="text" name="nazwa" id="nazwa"/> 
                        <span class="error"></span>
                    </div> 
                    <div class="line">
                        <label>Cena:</label>
                        <input type="text" name="cena" id="cena"/> 
                        <span class="error"></span>
                    </div>
                     <div class="line">
                        <label></label>
                        <input type="submit" value="Dodaj Usługę"/>                        
                    </div>
                </fieldset>
            </form>
        </div>
        <?php
        if(isset($_POST['nazwa'])){
            $nazwa = $_POST['nazwa'];
            $cena = floatval($_POST['cena']);
            if(trim($nazwa)!='' && $cena>0){
                $conn = new mysqli("localhost","root","","salon_prob");
                $conn->query("SET NAMES utf8");
                //print_r($conn);
                $sql = "INSERT INTO uslugi(nazwa,cena) VALUES('".$nazwa."', ".$cena.")";
                $result = $conn->query($sql);
                if($result){ echo "<p>Dodano nową usługę!!</p>";}
                else{ echo "<p>Błąd podczas dodawania usługi</p>";}                
                $conn->close();
            }
        }
        ?>
    </body>
</html>
