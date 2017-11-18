<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Salon pielęgnacji</title>
        <link href="salon.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section id="baner"><h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1></section>
        <section id="lewy">
            <h3>   SALON ZAPRASZA W DNIACH     </h3>
            <ul>
                <li>Poniedziałek, 12:00 - 18:00</li>
                <li>Wtorek, 12:00 - 18:00</li>
            </ul>
            <a href="pies.jpg"><img src="pies_mini.jpg" alt="pies"></a>
            <p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
        </section>
        <section id="srodkowy">
            <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3> 
            <?php
            $conn = new mysqli("localhost","root","","salon_prob");
            $conn->query("SET NAMES utf8");
            $sql = "SELECT imie,rodzaj,nastepna_wizyta,telefon FROM zwierzeta WHERE nastepna_wizyta<>0";
            $result = $conn->query($sql);          
            while($row=$result->fetch_assoc()){
                if($row['rodzaj']==1) echo "<p>Pies: {$row['imie']}</p>";
                if($row['rodzaj']==2) echo "<p>Kot: {$row['imie']}</p>";
                echo "<p>Data następnej wizyty: {$row['nastepna_wizyta']},"
                . " telefon właściciela: {$row['telefon']}</p>";
            }
           // print_r($result);
            //print_r($conn);
            //$conn->close();
            ?>
        </section>
        <section id="prawy">
            <h3>USŁUGI </h3> 
            <?php
               // $conn = new mysqli("localhost","root","","salon_prob");
               // $conn->query("SET NAMES utf8");
                $sql = "SELECT nazwa,cena FROM uslugi";
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc()){
                    echo "<p class='info'>{$row['nazwa']} {$row['cena']}</p>";
                }
                //$conn->close();
             $result = $conn->query("SELECT MIN(cena) FROM uslugi");
             $row = $result->fetch_row();
            echo "<p >Najniższe ceny już od: {$row[0]}zł</p>";
            $conn->close();
                ?>
            <div>
                <a href="dodaj.php">Dodaj nową usługę</a>
            </div>
        </section>       
    </body>
</html>
