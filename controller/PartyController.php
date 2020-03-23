<?php
class PartyController {
  static function create() {
    $party = new Party();
    require_once('view/pages/create.php');
  }

  static function add_challenge(){
    $challenge = new challenge($_GET['challenge'], $_GET['game_id']);
    Logger::logSimple("Nouveau gage !");
    Logger::logArray($challenge);
    require_once('view/pages/adminwarmup.php');
  }
}
 ?>
