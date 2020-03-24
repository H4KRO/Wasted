<?php

class Challenge {

  public static function create($g_challenge, $g_game_id) {
    $challenge = new Challenge();
    $challenge->id = uniqid();
    $challenge->name = $g_challenge;
    $challenge->game_id = $g_game_id;
    $pdo = $GLOBALS['pdo'];
    $sql = "INSERT INTO challenge (id, name, id_party) VALUES(:id, :name, :id_party)";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $challenge->id, ":name" => $challenge->name, ":id_party" => $challenge->game_id));
  }

  public static function getAll() {
    $pdo = $GLOBALS['pdo'];
    $req = $pdo->query("SELECT * FROM challenge;");
    return $req->fetchAll(PDO::FETCH_CLASS, 'Challenge');
  }

  public static function sort($id) {
    $pdo = $GLOBALS['pdo'];
    $sql = "SELECT * FROM challenge WHERE id_party = :id ORDER BY RAND() LIMIT 1;";
    $req = $pdo->prepare($sql);
    $req->execute(array(":id" => $id));
    $challenge = $req->fetchAll(PDO::FETCH_CLASS, 'Challenge')[0];
    $challenge->ctrait();
    return $challenge;
  }

  public function ctrait()
  {
    $havea = TRUE;

    while($havea == TRUE){

      $pos = strpos($this->name, '@');

      if(strpos($this->name, '@')===false)//Il n'y a pas de joueur visé, ( ou d'entité, ex : @Julien, @homme...) ==> On choisi un joueur aléatoire
      { 
        $players = Player::getPlayer($this->id_party);
        $player = $players[rand(0, sizeof($players)-1)];
        $this->name = $player->username.' '.$this->name;

      }else { //Sinon on remplace @nom_du_jouer par nom_du_joueur.

        if(strpos($this->name, '@homme')!==false){//Si c'est un homme

          $players = Player::getPlayerBySex($this->id_party, "homme");
          $player = $players[rand(0, sizeof($players)-1)];
          $this->name = substr_replace($this->name, $player->username, $pos , 6);

        }else if(strpos($this->name, '@femme')!==false){//Si c'est une femme

          $players = Player::getPlayerBySex($this->id_party, "femme");
          $player = $players[rand(0, sizeof($players)-1)];
          $this->name = substr_replace($this->name, $player->username, $pos, 5);
          
        }else{

          $this->name = str_replace('@', '', $this->name);
        }
      }
      if(strpos($this->name, '@')===false){
        
        $havea = FALSE;
      }
    }
  }
}

?>
