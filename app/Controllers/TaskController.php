<?php
require_once '../App/Models/TaskModel.php';

class TaskController
{
    private $taskModel;

    public function __construct($db)
    {
        $this->taskModel = new TaskModel($db);
    }

    public function getTaskList()
    {
        // Récupération de la liste des tâches depuis le modèle
        $tasks = $this->taskModel->getAllTasks();
        include '../app/views/tasks.php';
    }

    public function getTaskDetails($taskId)
    {
        // Récupération des détails d'une tâche depuis le modèle
        $task = $this->taskModel->getTask($taskId);
        include '../app/views/viewTask.php';
    }

    public function showCreateTaskForm()
    {
        // Affichage du formulaire de création de tâche
        include '../app/views/createTaskForm.php';
    }

    public function createTask($task_name)
    {
        // Ajout d'une nouvelle tâche
        $this->taskModel->createTask($task_name);
        // Redirection vers la page des tâches après la création
        header("Location: ../public/index.php?action=list");
    }

    public function showUpdateTaskForm($taskId)
    {
        // Affichage du formulaire de mise à jour de tâche
        $task = $this->taskModel->getTask($taskId);
        include '../app/views/updateTaskForm.php';
    }

    public function updateTask($taskId, $newTaskName)
    {
        // Mise à jour des détails de la tâche
        $this->taskModel->updateTask($taskId, $newTaskName);

        // Redirection vers la page des tâches après la mise à jour
        header("Location: index.php?action=list");
    }

    public function deleteTask($taskId)
    {
        // Suppression de la tâche
        $this->taskModel->deleteTask($taskId);

        // Redirection vers la page des tâches après la suppression
        header("Location: index.php?action=list");
        exit();
    }
}
