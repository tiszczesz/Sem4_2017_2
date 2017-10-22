<?php

function GetColors(){
    return [
            'red' => 'czerwony',
            'green' => 'zielony',
            'blue' => 'niebieski',
            'grey' => 'szary',
            'black' => 'czarny',
            'white' => 'biały',
        ];
}
function ColorsToSelect(array $colors){
    $html = "<select id='colors'>\n";
    foreach ($colors as $k => $v ) {
        $html .="<option value='{$k}'>{$v}</option>\n";
    }
    return $html."<select>\n";
}