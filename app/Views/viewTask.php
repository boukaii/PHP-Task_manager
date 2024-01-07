<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
</head>

<body>
    <h2>Details tache</h2>
    <p><strong>Nom de la tâche:</strong> <?php echo $task['task_name']; ?></p>
    <p><a href='../public/index.php?action=list'>Revenir a la liste des tâches</a></p>

    <h2>Modifier tâche</h2>
    <form action="../public/index.php?action=edit" method="post">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <button type="submit">Modifier Tâche</button>
    </form>

    <h2>Supprimer tâches</h2>
    <form action="../public/index.php?action=delete&id=<?php echo $task['id']; ?>" method="post">
        <button type="submit">Supprimer la tâche</button>
    </form>


</body>

</html>