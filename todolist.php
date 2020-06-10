<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src='js/connexion.js'></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='css/todolist.css'>
    <title>Accueil</title>
</head>

<body>
    <header>
        <?php include "include/header.php" ?>
    </header>
    <main id='mainindex'>
        <?php if (isset($_SESSION['id'])) {
        ?>
            <section id="todo">
                <h1>Votre liste de tâches à faire</h1>

            </section>

            <section id="done">
                <h1>Votre liste de tâches faites</h1>

            </section>
            <button class="button" id="create">Créer une tâche</button>
        <?php
        } else {
        ?>
            <section id="user">
                <span>Merci de vous connecter pour pouvoir commencer à créer vos tâches</span>
            </section>
        <?php
        }
        ?>
    </main>
</body>
</html>