<?php

class PlayerController {
  static function create(){
    if(isset($_GET['game_id']) && isset($_GET['username'])) {
      $party = Party::getParty($_GET['game_id']);
      Logger::logArray($party);
      $player = new Player($_GET['game_id'], $_GET['username']);
      Logger::logArray($player);
      $page = "adminwarmup";
      require_once('view/main.php');
    }
  }
}

 ?>
