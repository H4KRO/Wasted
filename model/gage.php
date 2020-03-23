<?php

class gage {

  public function __construct($g_gage, $g_game_id) {
    $this->id = uniqid();
    $this->nom = $g_gage;
    $this->game_id = $_GET['game_id'];
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO gage (id, nom, id_party) VALUES(:id, :nom, :id_party)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $this->id, ":nom" => $this->nom, ":id_party" => $this->game_id));
  }

  public static function getAll() {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query("SELECT * FROM gage;");
    return $req->fetchAll(PDO::FETCH_CLASS, 'Gage');
  }
}

 ?>
