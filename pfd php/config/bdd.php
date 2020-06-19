<?php
  class Bdd{
    private $servername;
    private $username;
    private $password;

    public function __construct(){
      $this->servername = 'localhost';
      $this->username = 'root';
      $this->password = '';
    }

    public function connect(){
      try {
        $cnx = new PDO("mysql:host=".$this->servername.";dbname=guerremondiale", $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      }catch(Exception $e){
        trigger_error($e->getMessage(),E_USER_ERROR);
      }
     
      return $cnx;
    }
  }
?>