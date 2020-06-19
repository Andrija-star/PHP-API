<?php

class Management {
  private $db;

    public function __construct(){
      
    }

    public function getElement(){
      global $bdd;
      $db = $bdd->connect();
      $requete = $db->prepare("SELECT * FROM guerre");
      $requete->execute();

      $data = [];

      while($recupe = $requete->fetch(PDO::FETCH_OBJ)){
        $data[] = $recupe;
      }
      unset($db);
      return $data;
    }

    public function insert($data){
      global $bdd;
      $db = $bdd->connect();
      $insert = $db->prepare("INSERT INTO guerre(`titre`,`annee_debut`,`annee_fin`,`stat`,`descriptif`,`type`)
      VALUES(:titre,:annee_debut,:annee_fin,:stat,:descriptif,:types)");
      $insert->execute($data);
      return;
    }

    public function recupElement($id){
      global $bdd;
      $db = $bdd->connect();
      $requete = $db->prepare("SELECT * FROM guerre WHERE id=:id");
      $requete->execute(array("id"=>$id));
      $recupe = $requete->fetch(PDO::FETCH_OBJ);
      return $recupe;
    }

    public function update($data){
      global $bdd;
      $db = $bdd->connect();
      $requete = $db->prepare("UPDATE guerre SET titre=:titre,annee_debut=:annee_debut,annee_fin=:annee_fin,stat=:stat,descriptif=:descriptif,type=:types WHERE id=:id");
      $requete->execute($data);
      return;

    }

}

?>