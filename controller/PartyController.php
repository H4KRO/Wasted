<?php
class PartyController {
  static function create() {
    $party = Party::create();
    Logger::logArray($party);
    require_once('view/pages/create.php');
  }

  static function add_challenge(){
    $party = Party::getParty($_GET['game_id']);
    Logger::logArray($party);
    $challenge = Challenge::create($_GET['challenge'], $_GET['game_id']);
    require_once('view/pages/adminwarmup.php');
  }

  static function sort(){
    $party = Party::getPartyFromAdmin($_GET['admin']);
    $party->start();
    $challenge = $party->sortChallenge();
    require_once('view/pages/admingame.php');
  }
}
 ?>
