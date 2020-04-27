<?php
include 'class/bdd.php';

session_start();

if(!isset($bdd))
{
    $bdd = new bdd;
}

if(isset($_POST['function']) || isset($_GET['function']))
{
    $function = $_POST['function'];

    switch($function)
    {
        case "getTD_done":
            $id = $_SESSION["id"];
            $bdd->getTD_Done($id);
        break;

        case "supp":
            $id = $_POST['id_task'];
            $bdd->suppTask($id);
        break;

        case "done":
            $id = $_POST['id_task'];
            $bdd->doneTask($id);
        break;

        case "getTD_finish":
            $id = $_SESSION["id"];
            $bdd->getTD_Finish($id);
        break;

        case "add":
            $id = $_SESSION["id"];
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $deadline = $_POST['deadline'];
            $bdd->create_Task($id, $titre, $description, $deadline);
        break;
    }
}



?>