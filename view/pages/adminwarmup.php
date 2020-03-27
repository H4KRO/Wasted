<section id="master_top" class ="section">
    <form action="" methode="get" id="pseudo">
        <p>Ajoute des gages</p>
        <input id="input_gage" type="text" maxlength="30" name="challenge">
        <input type="hidden" name="controller" value="ChallengeController">
        <input type="hidden" name="game_id" value="<?php echo $_GET['game_id']; ?>">
        <input type="hidden" name="admin" value="<?php echo $party->admin; ?>">
        <input type="hidden" name="method" value="add_challenge">
        <input class="ok" type="submit" value="Ok">
    </form>
</section>

<div id="main_bot" class ="section">
  <div id="play_bot" class="p_section">
      <p><?php echo $_GET['game_id'] ?></p>
      <div id="player_list"></div>
      <form method="get" action="">
        <input type="hidden" name="controller" value="PartyController">
        <input type="hidden" name="method" value="sort">
        <input type="hidden" name="admin" value="<?php echo $party->admin; ?>"><br/><br/>
        <input type="submit" class="ok"value="Lancer">
      </form>
  </div>
  <script>var partyId = "<?php echo $party->id; ?>"; </script>
  <script src="view/script/load_players.js"></script>
</div>
