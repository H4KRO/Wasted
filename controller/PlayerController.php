<?php

class PlayerController {
  static function create(){
    if(isset($_GET['game_id']) && isset($_GET['username'])) {
      
      $party = Party::getParty($_GET['game_id']);
      if(Player::exist($_GET['username'], $_GET['game_id']))
      {
        $page = "adminwarmup";
      }else {
        Logger::logArray($party);
        $player = Player::create($_GET['game_id'], $_GET['username'], $_GET['sex']);
        Logger::logArray($player);
        $page = "adminwarmup";
      }
      
      require_once('view/main.php');
    }
  }

  static function join_game() {
    if(Player::exist($_GET['username'], $_GET['game_id']))
    {
      $error = "Ce pseudo est déjà pris !";
      $page = "join";
    }else {
      $player = Player::create($_GET['game_id'], $_GET['username'],  $_GET['sex']);
      $page = "play";
    }
    
    require_once('view/main.php');
  }

  static function getPlayer()
  {
    $game_id = $_GET['game_id'];
    $players = Player::getPlayer($game_id);
    return $players;
  }
}

 ?>
