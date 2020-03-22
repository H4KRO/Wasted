<?php

class PlayerController {
  static function create(){
    if(isset($_GET['game_id']) && isset($_GET['username'])) {
      $player = new Player($_GET['game_id'], $_GET['username']);
      Logger::logSimple("Nouveu joueur !");
      Logger::logArray($player);
      require_once('view/pages/adminwarmup.php');
    }
  }
}

 ?>
