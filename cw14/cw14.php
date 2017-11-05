<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>        
        <?php
        require_once 'WorkerToHTML.php';
        $repo = new WorkerRepository("dane.txt");
        $workers = $repo->GetAllWorkers();
        foreach ($workers as $item) {
            echo $item;
        }
        echo WorkerToHTML::WorkersToTable($workers);
        ?>       
        <div>
            <a href="dodaj.html">Dodaj pracownika</a>
        </div>
    </body>
</html>
