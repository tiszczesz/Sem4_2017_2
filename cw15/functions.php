<?php

function getConnection() {
    $conn = new mysqli('localhost', 'root', '', 'sem4_firma_2017_2');
    if ($conn->connect_errno > 0) {
        echo "ERROR: " . $conn->connect_error;
        return NULL;
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}

function getAllWorkers() {
    $conn = getConnection();
    if ($conn == NULL) {
        return [];
    }
    $sqlQuery = "SELECT * FROM workers";
    $result = $conn->query($sqlQuery);
    $workers = [];
    if ($result) {
        while (($row = $result->fetch_assoc()) != false) {
            $workers[] = $row;
        }
    }
    $conn->close();
    return $workers;
}

function WorkersToTable(array $workers) {
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Imię</th>"
            . "<th>Nazwisko</th><th>Pensja</th>"
            . "<th>Operacje</th></tr>\n";
    $i = 0;
    foreach ($workers as $row) {
        $i++;
        $html .= "<tr>\n";
        $html .= "\t<td>{$i}</td>\n"
                . "\t<td>{$row['imie']}</td>\n"
                . "\t<td>{$row['nazwisko']}</td>\n"
                . "\t<td>{$row['pensja']}</td>\n"
                . "<td><a href='usun.php?id={$row['id']}'>Usuń</a>"
                . " <a href='edytuj.php?id={$row['id']}'>Edytuj</a></td</tr>";
    }
    return $html."</table>";
}
function addWorkerToDB($imie,$nazwisko,$pensja){
    $conn = getConnection();
    if($conn==NULL){return false;}
    $sqlQuery = "INSERT INTO workers(imie,nazwisko,pensja)"
            . " VALUES('{$imie}','{$nazwisko}',{$pensja})";
    $result = $conn->query($sqlQuery);
   // var_dump($result);
    $conn->close();
    return $result;
}
