<?php

if (!isset($_GET["id"])){
  header("location: ../");
}
require_once("../config/bdd.php");
$bdd = new Bdd();
$db = $bdd->connect();

$sup = $db->prepare("DELETE FROM guerre WHERE id=:id");
$sup->execute(array(
  "id"=>$_GET["id"]
));
header("location: ../");
?>