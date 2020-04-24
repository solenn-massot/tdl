<?php
require_once "class/moduleco.php";
session_start();

$co = new user;
if($_GET["type"] == "insc"){
    $co->inscription($_GET["login"],$_GET["password"]);
}
if($_GET["type"] == "co"){
    $co->connexion($_GET["login"],$_GET["password"]);
}
?>