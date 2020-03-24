<?php

class Party {

  public static function create() {
    $party = new Party();
    $party->id = uniqid();
    $party->started = 0;
    $party->admin = uniqid();
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO party (id, started, admin) VALUES(:id, :started, :admin)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $party->id, ":started" => $party->started, "admin" => $party->admin));
    return $party;
  }

  public static function getAll() {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query("SELECT * FROM party;");
    return $req->fetchAll(PDO::FETCH_CLASS, 'Party');
  }

  public static function getPartyFromAdmin($admin){
    $pdo = $GLOBALS['pdo'];
    $sql = "SELECT * FROM party WHERE admin = :admin;";
    $req = $pdo->prepare($sql);
    $req->execute(array(":admin" => $admin));
    return $req->fetchAll(PDO::FETCH_CLASS, 'Party')[0];
  }

  public static function getParty($id){
    $pdo = $GLOBALS['pdo'];
    $sql = "SELECT * FROM party WHERE id = :id;";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $id));
    return $req->fetchAll(PDO::FETCH_CLASS, 'Party')[0];
  }

  public function sortChallenge() {
    return Challenge::sort($this->id);
  }

  public function start() {
    $pdo = $GLOBALS['pdo'];
    $sql = "UPDATE party SET started = 1 WHERE admin = :admin;";
    $req = $pdo->prepare($sql);
    $req->execute(array(":admin" => $this->admin));
  }


}

 ?>
