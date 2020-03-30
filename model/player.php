<?php

class Player {

  public static function create($game_id, $username, $sex){
    $player = new Player();
    $player->game_id = $game_id;
    $player->username = $username;
    $player->sex = $sex;
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO player (game_id, username, sex) VALUES(:game_id, :username, :sex)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":game_id" => $player->game_id, ":username" => $player->username, ":sex"=>$player->sex));
  }

  public static function exist($username, $game_id)
  {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query('CALL exist("'.$username.'", "'.$game_id.'")');
    $res = $req->fetchAll();
    return $res[0][0];
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

  public static function getPlayerBySex($game_id, $sex)
  {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query('SELECT * FROM player WHERE sex = "'.$sex.'" AND game_id ="'.$game_id.'"');
    return $req->fetchAll(PDO::FETCH_CLASS, 'Player');
  }
}

?>

