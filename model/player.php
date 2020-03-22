<?php

class Player {
  public function __construct($game_id, $username){
    $this->game_id = $game_id;
    $this->username = $username;
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO player (game_id, username) VALUES(:game_id, :username)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":game_id" => $this->game_id, ":username" => $this->username));
  }

  public static function getAll() {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query("SELECT * FROM player;");
    return $req->fetchAll(PDO::FETCH_CLASS, 'Player');
  }
}

 ?>
