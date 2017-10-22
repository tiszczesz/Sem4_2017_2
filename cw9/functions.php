<?php

function LoadFromFile($filename) {
    $dane = [];
    if (file_exists($filename)) {
        $f = fopen($filename, 'r');
        if ($f) {
            while (($line = trim(fgets($f))) != false) {
                $dane[] = $line;
            }
            fclose($f);
        }
    }
    return $dane;
}
function DaneToParagraphs(array $dane){
    $html = "";
    foreach ($dane as $line) {
       $html .= "<p>{$line}</p>\n"; 
    }
    return $html;
}
function AddToFile(array $dane,$filename){
    $f = fopen($filename, 'a');
    if($f){
        foreach ($dane as $line) {
            fwrite($f, $line.PHP_EOL);
        }
        fclose($f);
    }
}
