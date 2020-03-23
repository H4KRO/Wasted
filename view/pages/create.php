<section id="master_top"class ="section">
        <p id = "pseudo"><strong>Pseudo</strong></p>
        <input id="master_input"type="text" maxlength="15" name="pseudo_admin">
</section>

<section id="master_bot" class="section">
    <form action="" methode="get">
        <input type="hidden" name="controller" value="PlayerController">
        <input type="hidden" name="method" value="create">
        <input type="hidden" name="game_id" value="<?php echo $party->id; ?>">
        <input type="hidden" name="username" value="" id="hidden_username">
        <input type="hidden" name="method" value="create">
        <input type="submit" value="Start">
    </form>
</section>

<script>
  document.getElementById("master_input").onchange = function() {
    document.getElementById("hidden_username").value = document.getElementById("master_input").value;
  }
</script>

<?php
  Logger::logSimple("J'ai bien accès à l'ID = " . $party->id);
 ?>
