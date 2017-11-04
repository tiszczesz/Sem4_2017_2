<?php
require_once 'WorkerRepository.php';
class WorkerToHTML{
    public static function WorkersToTable(array $workers){
        $html = "<table>\n";
        $html .= "<tr>"
                . "<th>Imię</th>"
                . "<th>Nazwisko</th>"
                . "<th>Pensja</th>"
                . "</tr>\n";
        foreach ($workers as $w) {
            $html .= "<tr>\n";
            $html .= "<td>{$w->getImie()}</td>"
                    . "<td>{$w->getNazwisko()}</td>"
                    . "<td>{$w->getPensja()}</td></tr>\n";
        }
           $html .= "</table>\n";
        return $html;
    }
    public static function WorkerToDiv(Worker $w){
        return $w;
    }
}


