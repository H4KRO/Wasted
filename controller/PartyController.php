<?php
class PartyController {
  static function create() {
    $party = new Party();
    Logger::logSimple("Nouvelle partie !");
    Logger::logArray($party);
    require_once('view/pages/create.php');
  }

  static function add_gage(){
    $gage = new gage($_GET['gage'], $_GET['game_id']);
    Logger::logSimple("Nouveau gage !");
    Logger::logArray($gage);
    require_once('view/pages/adminwarmup.php');
  }
}
 ?>
