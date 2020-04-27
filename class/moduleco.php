<?php

class user{

    private $connexion;

    public function __construct(){
        $this->connexion = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '');
    }
    public function inscription($login,$password){
        if($login != NULL && $password != NULL){
            $req = $this->connexion->query("SELECT login FROM users WHERE login = '$login'");
            $fetch = $req->fetchAll(PDO::FETCH_ASSOC);
            if(empty($fetch)){
                $mdp = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $req = $this->connexion->query("INSERT INTO users(login,password) VALUES ('$login', '$mdp')");
                    echo "ok";
            }
            else
                echo "login";
        }
        else
            echo "miss";
    }
    public function connexion($login, $password){
        if($login != NULL && $password != NULL){
            $req = $this->connexion->query("SELECT * FROM users WHERE login = '$login'");
            $fetch = $req->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($fetch)){
                if(password_verify($password,$fetch[0]["password"])){
                    $_SESSION["login"] = $fetch[0]["login"];
                    $_SESSION["id"] = $fetch[0]["id"];
                    echo "co";
                }else
                    echo "mdp";
            }else
                echo "create";
        }else
            echo "miss";
    }  
}

?>