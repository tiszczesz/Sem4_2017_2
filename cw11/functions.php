<?php
function SaveToFile(array $dane,$filename){
     $f = fopen($filename, 'w');
    if($f){
        foreach ($dane as $line) {
            fwrite($f, $line.' ');
        }
        fclose($f);
    }
}
function GetPierwsze($liczba){
    $pierwsze = [];
    for($i=2;$i<=$liczba;$i++){
        if(IsPierwsza($i)) $pierwsze[]=$i;
    }
    return $pierwsze;
}
function IsPierwsza($liczba){
    for($i=2;$i<$liczba;$i++){
        if($liczba%$i==0) return false;
    }
    return true;
}
