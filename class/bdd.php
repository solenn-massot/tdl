<?php

class bdd
{
    private $connexion;

    public function __construct()
    {
        try {
            $this->connexion = new PDO('mysql:host=127.0.0.1;dbname=todolist', 'root', '');
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function getTD_Done($id){
        $request = $this->connexion->prepare("SELECT titre, description, date_crea, deadline, etat, users.login,taches.id FROM taches INNER JOIN users ON taches.id_user = users.id WHERE taches.id_user = '$id' AND taches.etat = 'progress'");
        $request->execute();
        $resultat = $request->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultat);
    }

    public function suppTask($id)
    {
        $request = $this->connexion->prepare("DELETE FROM taches WHERE id = '$id'");
        $request->execute();
    }

    public function doneTask($id)
    {
        $today = date('Y-m-d');
        $request = $this->connexion->prepare("UPDATE taches SET etat = 'done', date_fin = '$today' WHERE id = '$id'");
        $request->execute();
    }

    public function getTD_Finish($id)
    {
        $request  = $this->connexion->prepare("SELECT taches.id, titre, description, date_crea, date_fin, etat, users.login FROM taches INNER JOIN users ON taches.id_user = users.id WHERE taches.id_user = '$id' AND taches.etat = 'done'");
        $request->execute();
        $resultat = $request->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultat);
    }

    public function create_Task($id, $titre, $description, $deadline)
    {
        $date = date('Y-m-d');
        if($deadline == "")
        {
            $request = $this->connexion->prepare("INSERT INTO taches (id_user, titre, description, date_crea, etat) VALUES ('$id', '$titre', '$description', '$date', 'progress')");
        }
        else
        {
            $request = $this->connexion->prepare("INSERT INTO taches (id_user, titre, description, date_crea, deadline, etat) VALUES ('$id', '$titre', '$description', '$date', '$deadline', 'progress')");
        }
        var_dump($request);
        $request->execute();
    }
}

?>