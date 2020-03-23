<?php

class Challenge {

  public static function create($g_challenge, $g_game_id) {
    $challenge = new Challenge();
    $challenge->id = uniqid();
    $challenge->name = $g_challenge;
    $challenge->game_id = $g_game_id;
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO challenge (id, name, id_party) VALUES(:id, :name, :id_party)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $challenge->id, ":name" => $challenge->name, ":id_party" => $challenge->game_id));
  }

  public static function getAll() {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query("SELECT * FROM challenge;");
    return $req->fetchAll(PDO::FETCH_CLASS, 'Challenge');
  }

  public static function sort($id) {
    $pdo = $GLOBALS['pdo'];
    $sql = "SELECT * FROM challenge WHERE id_party = :id ORDER BY RAND() LIMIT 1;";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $id));
    return $req->fetchAll(PDO::FETCH_CLASS, 'Challenge')[0];
  }
}

?>