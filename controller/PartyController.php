<?php
class PartyController {
  static function create() {
    $party = Party::create();
    Logger::logArray($party);
    $page = "create";
    require_once('view/main.php');
  }

  static function join() {
    $page = "join";
    require_once('view/main.php');
  }

  static function add_challenge(){
    $party = Party::getParty($_GET['game_id']);
    Logger::logArray($party);
    if($party->started == 1)
    {
      $error ="Partie deja lancée !";
      $page = "play" ;
    }else{
      $challenge = Challenge::create($_GET['challenge'], $_GET['game_id']);
      $page = "adminwarmup";
    }
    require_once('view/main.php');
  }

  static function sort(){
    $party = Party::getPartyFromAdmin($_GET['admin']);
    $party->start();
    $challenge = $party->sortChallenge();
    $page = "admingame";
    require_once('view/main.php');
  }

  static function api_getPlayers(){
    $players = Player::getPlayer($_GET['id']);
    header('content-type:application/json');
    echo json_encode($players);
  }
}
 ?>
