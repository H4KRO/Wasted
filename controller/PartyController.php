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

}
 ?>
