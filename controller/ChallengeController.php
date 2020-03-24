<?php
class ChallengeController {

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
    //$party->start();
    $challenge = $party->sortChallenge();
    $page = "admingame";
    require_once('view/main.php');
  }

}
 ?>
