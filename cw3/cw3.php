<!DOCTYPE html>
<html>
<head>
	<title>Ćwiczenie 3</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Ćwiczenie 3</h1>
<?php
    $imie = "Jan";
    $nazwisko = "Nowak";
    $wiek = 34;
    const warunek = 18;
    if($wiek>=warunek){
    	echo "<p>Witaj {$imie} {$nazwisko} zapraszamy "
    	. " do naszego serwisu... </p>\n";
    }else{
    	echo "<p>Witaj {$imie} {$nazwisko} "
    	. " to serwis nie dla Ciebie </p>\n";
    }
    $a = -45;
    $a = $a < 0 ? -$a : $a;//operator warunkowy
    echo "<p> a = {$a}</p>\n";
    define("stala", 566);
    echo " wartosc stałej : ".stala.'<br>';
    const stala2 = "ala ma kota";
    echo " wartosc stałej2 : ".stala2.'<br>';
?>
</body>
</html>