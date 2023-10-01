<!DOCTYPE html>
<html>
<head>
    <title>Liste de tâches</title>
</head>
<body>
    <h1>Liste de tâches</h1>
    <ul>
        <?php
        require_once('../src/Task.php');

        $task1 = new Task('Faire les courses');
        $task2 = new Task('Répondre aux e-mails');

        $tasks = [$task1, $task2];

        foreach ($tasks as $task) {
            echo '<li>' . $task->getDescription() . '</li>';
        }
        ?>
    </ul>
</body>
</html>
