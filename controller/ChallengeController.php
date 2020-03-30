<?php
class ChallengeController {

  static function add_challenge(){
    $party = Party::getParty($_GET['game_id']);
    Logger::logArray($party);

    $challenge = Challenge::create($_GET['challenge'], $_GET['game_id']);
    $page = "adminwarmup";// IF page = admin alors adminwarmup, si page egale play, alors une page sans rien
    
    require_once('view/main.php');
  }

  static function sort(){
    $party = Party::getPartyFromAdmin($_GET['admin']);
    //$party->start();
    $challenge = $party->sortChallenge();
    $page = "admingame";
    require_once('view/main.php');
  }

}
 ?>
