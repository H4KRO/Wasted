<section id="master_top"class ="section">
        <p id = "pseudo"><strong>Pseudo</strong></p>
        <input id="master_input"type="text" maxlength="15" name="pseudo_admin">
  </div>
</section>

<section id="main_bot" class="section">
    <form class="p_section" action="" methode="get">
        <input type="hidden" name="controller" value="PlayerController">
        <input type="hidden" name="method" value="create">
        <input type="hidden" name="game_id" value="<?php echo $party->id; ?>">
        <input type="hidden" name="username" value="" id="hidden_username">
        <input type="hidden" name="method" value="create">
        <input class="ok" type="submit" value="Start">
    </form>
</section>

<script>
  document.getElementById("master_input").onchange = function() {
    document.getElementById("hidden_username").value = document.getElementById("master_input").value;
  }
</script>
