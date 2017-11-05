<?php
require_once 'functions.php';
if (isset($_POST['imie'])) {
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $pensja = intval($_POST['pensja']);
    if($imie!='' && $nazwisko!='' && $pensja>0){
        addWorkerToDB($imie,$nazwisko,$pensja);
    }
    header("Location: cw15.php");
}

