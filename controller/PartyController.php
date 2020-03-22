<?php
class PartyController {
  static function create() {
    $party = new Party();
    Logger::logSimple("Nouvelle partie !");
    Logger::logArray($party);
    require_once('view/pages/create.php');
  }
}
 ?>
