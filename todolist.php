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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Accueil</title>
</head>

<body>
    <header>
        <?php include "include/header.php" ?>
    </header>
    <main class="container" id="mainindex">
        <div class="row">
        <?php if (isset($_SESSION['id'])) {
        ?>
            <section id="todo" class="col s12">
                <h1>Votre liste de tâches à faire</h1>

            </section></br>

            <section id="done" class="col s12">
                <h1>Votre liste de tâches faites</h1>

            </section>
            <button class="btn waves-effect waves-light deep-purple" id="create">Créer une tâche</button>
            <section id="createtd">

            </section>
        <?php
        } else {
        ?>
            <section id="user">
                <h1 class="text-align center">Merci de vous connecter pour pouvoir commencer à créer vos tâches</h1>
            </section>
        <?php
        }
        ?>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>