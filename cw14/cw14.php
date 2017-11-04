<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'WorkerRepository.php';
        $repo = new WorkerRepository("dane.txt");
        $workers = $repo->GetAllWorkers();
        foreach ($workers as $item) {
            echo $item;
        }
        ?>
        </pre>
    </body>
</html>
