<section id="master_top" class ="section">
    <form action="" methode="get" id="pseudo">
        <p>Ajoute des gages</p>
        <input id="input_gage" type="text" maxlength="30" name="challenge">
        <input type="hidden" name="controller" value="ChallengeController">
        <input type="hidden" name="method" value="add_challenge">
        <input type="hidden" name="game_id" value="<?php echo $_GET['game_id']; ?>">
        <input type="hidden" name="page" value="play">
        <input class="ok" type="submit" value="Ok">
    </form>
</section>
<div id="master_bot" class ="section">
  <div id="play_bot" class="p_section">
  <p id="link"><?php echo $_GET['game_id']; ?> </p>
    <div id="player_list"></div>
  </div>
  <script>
    var partyId = "<?php echo $_GET['game_id']; ?>"; 
  </script>
  <script src="view/script/load_players.js"></script>
</div>
