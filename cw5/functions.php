<?php
function GenerList(array $dane,$isNumbers=true){
    $html = $isNumbers? '<ol>'."\n":'<ul>'."\n";
    foreach ($dane as $item) {
        $html .= "\t<li>{$item}</li>\n";
    }
    $html .= $isNumbers? '</ol>'."\n":'</ul>'."\n";;
    return $html;
}
function GenerTab($rows=20,$cols=20){
    $html = "<table>\n";
    for($i=1; $i<=$rows; $i++){
        $html .= "<tr>\n";
        for($j=1; $j<=$cols; $j++){
            $wyr = $i==1 || $j==1 ? "class='wyr'" :"";
            $html .= "<td {$wyr}>".($i*$j)."</td>\n";
        }
        $html .= "</tr>\n";
    }
    $html .= "</table>\n";
    return $html;
}