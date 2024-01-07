<?php

class TaskModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    // Voir toutes les tâches
    public function getAllTasks()
    {
        $stmt = $this->db->query("SELECT * FROM tasks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Créer une tâche
    public function createTask($task_name)
    {
        if (!empty($task_name)) {
            $stmt = $this->db->prepare("INSERT INTO tasks (task_name) VALUES (:task_name)");
            $stmt->bindParam(':task_name', $task_name);
            $stmt->execute();
        } else {
            // Gérer l'erreur, par exemple, en lançant une exception
            throw new Exception("Le champ 'task_name' ne peut pas être vide.");
        }
    }
    // Voir la tâche
    public function getTask($taskId)
    {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE id = :id");
        $stmt->bindParam(':id', $taskId);
        $stmt->execute();
        return $stmt->fetch();
    }
    // Modifier la tâche
    public function updateTask($taskId, $newTaskName)
    {
        $stmt = $this->db->prepare("UPDATE tasks SET task_name = :new_task_name WHERE id = :id");
        $stmt->bindParam(':new_task_name', $newTaskName);
        $stmt->bindParam(':id', $taskId);
        $stmt->execute();
    }
    // Supprimer la tâche
    public function deleteTask($taskId)
    {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->bindParam(':id', $taskId);
        $stmt->execute();
    }
}
