<?php

class Player {

  public static function create($game_id, $username){
    $player = new Player();
    $player->game_id = $game_id;
    $player->username = $username;
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO player (game_id, username) VALUES(:game_id, :username)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":game_id" => $player->game_id, ":username" => $player->username));
  }

  public static function getAll() {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query("SELECT * FROM player;");
    return $req->fetchAll(PDO::FETCH_CLASS, 'Player');
  }

  public static function getPlayer($game_id)
  {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query('SELECT * FROM player WHERE game_id ="'.$game_id.'"');
    return $req->fetchAll(PDO::FETCH_CLASS, 'Player');
  }
}

?>

