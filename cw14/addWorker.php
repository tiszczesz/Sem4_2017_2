<?php
require_once 'WorkerRepository.php';
if (isset($_POST['imie'])) {
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $pensja = intval($_POST['pensja']);
    if($imie!='' && $nazwisko!='' && $pensja>0){
        $w = new Worker($imie,$nazwisko,$pensja);
        $repo = new WorkerRepository('dane.txt');
        $repo->AddWorkerToFile($w);
    }
    header("Location: cw14.php");
}