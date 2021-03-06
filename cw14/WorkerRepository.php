<?php
require_once 'Worker.php';
class WorkerRepository{
    private $filename;
    public function __construct($filename) {
        $this->filename = $filename;
    }
    public function GetAllWorkers(){
        $workers = [];
        $dane = file($this->filename);
        foreach ($dane as $line) {
            if(trim($line)!=''){
            $workers[] = $this->RowToWorker($line);
            }
        }
        return $workers;
    }
    private function RowToWorker($line){
        $temp = explode('|', trim($line));
        //print_r($temp);
        return new Worker(trim($temp[0]),
                trim($temp[1]), trim($temp[2]));
    }
    public function AddWorkerToFile(Worker $w){
        $f = fopen($this->filename, 'a');
        if($f){
            $line = $w->getImie().'|'.$w->getNazwisko().'|'
                    .$w->getPensja().PHP_EOL;
            fwrite($f, $line);
            fclose($f);
        }
    }
}
