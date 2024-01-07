<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
</head>

<body>
    <h2>Détails des tâches</h2>
    <p><strong>Nom de la tâche:</strong> <?php echo $task['task_name']; ?></p>
    <p><a href='../public/index.php?action=list'>Revenir à la liste des tâches</a></p>


    <h2>Modification</h2>
    <form action="../public/index.php?action=update" method="post">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <label for="new_task_name">Nouveau nom de tâche :</label>
        <input type="text" id="new_task_name" name="new_task_name" value="<?php echo $task['task_name']; ?>" required>
        <button type="submit">Modifier la tâche</button>
    </form>


    <h2>Supprimer la tâche</h2>
    <form action="../public/index.php?action=delete&id=<?php echo $task['id']; ?>" method="post">
        <button type="submit">Supprimer la tâche</button>
    </form>

</body>

</html>