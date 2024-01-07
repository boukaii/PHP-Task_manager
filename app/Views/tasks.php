<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>



<body>
    <h2>Liste des tâches</h2>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><a href='index.php?action=view&id=<?php echo $task['id']; ?>'><?php echo $task['task_name']; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <h2>Créer une tâche</h2>
    <form action="../public/index.php?action=create" method="post">
        <button type="submit">Créer la tâche</button>
    </form>


</body>

</html>