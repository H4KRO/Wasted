<?php

class Challenge {

  public function __construct($g_challenge, $g_game_id) {
    $this->id = uniqid();
    $this->name = $g_challenge;
    $this->game_id = $g_game_id;
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO challenge (id, name, id_party) VALUES(:id, :name, :id_party)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $this->id, ":name" => $this->name, ":id_party" => $this->game_id));
  }

  public static function getAll() {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query("SELECT * FROM challenge;");
    return $req->fetchAll(PDO::FETCH_CLASS, 'Challenge');
  }
}

?>
