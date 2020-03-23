<?php
class PartyController {
  static function create() {
    $party = Party::create();
    Logger::logArray($party);
    $page = "create";
    require_once('view/main.php');
  }

  static function join() {
    require_once('view/pages/join.php');
  }

  static function add_challenge(){
    $party = Party::getParty($_GET['game_id']);
    Logger::logArray($party);
    $challenge = Challenge::create($_GET['challenge'], $_GET['game_id']);
    $page = "adminwarmup";
    require_once('view/main.php');
  }

  static function sort(){
    $party = Party::getPartyFromAdmin($_GET['admin']);
    $party->start();
    $challenge = $party->sortChallenge();
    $page = "admingame";
    require_once('view/main.php');
  }
}
 ?>
