<?php
// database.php

$dbConfig = [
    'host' => 'localhost',    // L'adresse du serveur de base de données
    'username' => 'root',      // Nom d'utilisateur de la base de données
    'password' => '',          // Mot de passe de la base de données
    'database' => 'tasks_db', // Nom de la base de données
    'charset' => 'utf8mb4',    // Jeu de caractères utilisé
];

try {
    $db = new PDO(
        "mysql:host={$dbConfig['host']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}",
        $dbConfig['username'],
        $dbConfig['password']
    );

    // Configuration supplémentaire si nécessaire
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Utilisez uniquement si nécessaire
} catch (PDOException $e) {
    // En cas d'erreur de connexion à la base de données
    die("Database connection failed: " . $e->getMessage());
}

// Vous pouvez maintenant utiliser l'objet $db pour exécuter des requêtes SQL dans votre application.
