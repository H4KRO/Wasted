<?php

class Party {

  public function __construct() {
    $this->id = uniqid();
    $this->started = 0;
    $this->admin = uniqid();
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO party VALUES(:id, :started, :admin)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $this->id, ":started" => $this->started, "admin" => $this->admin));
  }

  public static function getAll() {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query("SELECT * FROM party;");
    return $req->fetchAll(PDO::FETCH_CLASS, 'Party');
  }
}

 ?>
