<?php

if (!isset($_POST["submit"])){
  header("location: ../?p=acceuil");
}
require_once("../config/bdd.php");
require_once("../model/management.php");
$man = new Management();
$bdd = new Bdd();
$db = $bdd->connect();

$recup = array(
  "titre"=>$_POST["titre"],
    "annee_debut"=>$_POST["pd"],
    "annee_fin"=>$_POST["pf"],
    "stat" =>$_POST["stat"],
    "descriptif"=>$_POST["desc"],
    "types" => $_POST["type"],
    "id" => $_POST["id"]
);
$update = $man->update($recup);

//var_dump($insert);
header("location: ../");
?>