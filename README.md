# PHP-task_manager


 
Task Manager est un projet personnel développé en PHP qui permet aux utilisateurs de créer, modifier et supprimer des tâches. Ce projet intègre plusieurs éléments clés, notamment :




**_Architecture MVC :_** Le projet suit le modèle d'architecture MVC (Modèle-Vue-Contrôleur), qui aide à organiser le code en trois composants interconnectés : Modèle (données et logique métier), Vue (interface utilisateur) et Contrôleur (gère les entrées utilisateur et met à jour le modèle).

**_Intégration de base de données :_** L'application utilise une base de données pour stocker les informations liées aux tâches. La configuration de la base de données se trouve dans le fichier database.php, et PHPMyAdmin est utilisé pour la gestion de la base de données.

**_Programmation Orientée Objet (POO) :_** Le projet utilise les principes de la POO pour améliorer l'organisation du code, sa lisibilité et sa maintenabilité.

**_PDO (PHP Data Objects) :_** PDO est utilisé pour l'accès à la base de données. Il s'agit d'une couche d'accès à la base de données offrant une méthode uniforme d'accès à différentes bases de données, assurant un niveau de sécurité plus élevé.

**_Serveur WAMP :_** L'environnement de développement utilise la pile de serveurs WAMP (Windows, Apache, MySQL, PHP/Python/Perl) pour créer un environnement de serveur local pour le développement PHP.

**_Opérations CRUD :_** L'application prend en charge les opérations CRUD (Créer, Lire, Mettre à jour, Supprimer) pour gérer efficacement les tâches.        


# arborescence des fichiers



**_controllers :_** Contient les contrôleurs qui gèrent les entrées utilisateur et interagissent avec le modèle.  
**_models :_** Inclut les classes modèle qui représentent les données et la logique métier.  
**_views :_** Contient les vues responsables du rendu de l'interface utilisateur.  
**_database.php :_** Fichier de configuration pour la connexion à la base de données.  
**_index.php :_** Point d'entrée de l'application.  
**_.gitignore :_** Spécifie les fichiers et répertoires à ignorer dans le contrôle de version.




# Installation
Clonez le dépôt sur votre machine locale.

```bash
git clone : https://github.com/boukaii/PHP-task_manager.git
```
Configurez votre serveur WAMP et assurez-vous qu'il est en cours d'exécution.

Importez le schéma de base de données fourni dans PHPMyAdmin pour créer les tables nécessaires.

Configurez la connexion à la base de données en éditant le fichier database.php.

# Utilisation
Ouvrez le projet dans votre navigateur en accédant à
```bash 
http://localhost/PHP-task_manager. 
```

Utilisez l'application pour créer, afficher, mettre à jour et supprimer des tâches.

