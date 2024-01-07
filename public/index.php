<?php
require_once '../config/database.php';
require_once '../App/Controllers/TaskController.php';

// Instancier le contrôleur en passant la connexion PDO
$taskController = new TaskController($db);

// Vérifier l'action à effectuer (si spécifiée dans l'URL)
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// Traiter l'action
switch ($action) {
    case 'list':
        // Afficher la liste des tâches
        $taskController->getTaskList();
        break;
    case 'view':
        // Afficher les détails d'une tâche
        $taskId = isset($_GET['id']) ? $_GET['id'] : null;
        $taskController->getTaskDetails($taskId);
        break;
    case 'create':
        // Afficher le formulaire de création de tâche
        $taskController->showCreateTaskForm();
        break;
    case 'store':
        // Créer une nouvelle tâche
        $task_name = isset($_POST['task_name']) ? $_POST['task_name'] : null;
        $taskController->createTask($task_name);
        break;
    case 'edit':
        // Rediriger vers la page de modification de tâche
        $taskId = isset($_POST['id']) ? $_POST['id'] : null;
        $taskController->showUpdateTaskForm($taskId);
        break;
    case 'update':
        // Mettre à jour une tâche existante
        $taskId = isset($_POST['id']) ? $_POST['id'] : null;
        $newTaskName = isset($_POST['new_task_name']) ? $_POST['new_task_name'] : null;
        $taskController->updateTask($taskId, $newTaskName);
        break;























    case 'delete':
        // Supprimer une tâche
        $taskId = isset($_GET['id']) ? $_GET['id'] : null;
        $taskController->deleteTask($taskId);
        break;
    default:
        // Rediriger vers la liste des tâches par défaut
        header("Location: index.php?action=list");
        break;
}
