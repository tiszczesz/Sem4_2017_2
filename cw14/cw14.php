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
        print_r($repo->GetAllWorkers());
        ?>
        </pre>
    </body>
</html>
