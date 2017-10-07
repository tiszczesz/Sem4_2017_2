<!DOCTYPE html>
<html>
<head>
	<title>Ćwiczenie 2</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Ćwiczenie 2</h1>
<h3>Typy liczbowe w php</h3>
<?php
	echo "<p>Hello world</p>\n";
	$a = 12;
	var_dump($a);
	$a = 12.9;
	var_dump($a);
?>
<h3>Typ znakowy w php</h3>
<?php
 $tekst = "Ala ma kota";
 var_dump($tekst);
 echo '<p>Długość tekstu: "'.$tekst.'" wynosi: '. strlen($tekst) .'</p>';
?>
</body>
</html>