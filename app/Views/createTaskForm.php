<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Task</title>
</head>

<body>
    <h2>Créer une nouvelle tâche</h2>
    <form action="../public/index.php?action=store" method="post">

        <label for="task_name">Nom :</label>
        <input type="text" id="task_name" name="task_name" required>

        <button type="submit">Créer la tâche</button>
    </form>

    <p><a href='index.php?action=list'>Revenir à la liste des tâches</a></p>

</body>

</html>