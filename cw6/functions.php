<?php
function WorkersToTab(array $dane,$isLp=true){
    $lp = $isLp ? "<th>Lp</th> " : "";
    $html = "<table><tr>{$lp}<th>Imię</th><th>Nazwisko</th>"
            . "<th>Pensja</th></tr>\n";
    $i=0;
    foreach ($dane as $row) {
        $i++;
        $html .= "<tr>\n";
        if($isLp) {$html .= "<td>{$i}</td>";}
         $html .= "<td>{$row[0]}</td>";
          $html .= "<td>{$row[1]}</td>";
           $html .= "<td>{$row[2]}</td></tr>\n";
    }
    return $html."</table>\n";
}
