<?php
class PartyController {
  static function create() {
    $party = new Party();
    require_once('view/pages/create.php');
  }
}
 ?>
