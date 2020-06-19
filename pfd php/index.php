<?php
  require_once("config/bdd.php");
  require_once("model/management.php");
  $bdd = new Bdd();
  $man = new Management();

if(!isset($_GET["p"])){
  $page = "acceuil";
}else{
  $page = $_GET["p"];
}


include("include/header.php");
include("view/".$page.".html");
include("include/footer.php");
?>