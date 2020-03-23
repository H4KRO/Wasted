<?php

class PlayerController {
  static function create(){
    if(isset($_GET['game_id']) && isset($_GET['username'])) {
      $party = Party::getParty($_GET['game_id']);
      Logger::logArray($party);
      $player = Player::create($_GET['game_id'], $_GET['username']);
      Logger::logArray($player);
      require_once('view/pages/adminwarmup.php');
    }
  }

  static function join_game() {
    $player = Player::create($_GET['game_id'], $_GET['username']);
    require_once('view/pages/play.php');
  }

}

 ?>
