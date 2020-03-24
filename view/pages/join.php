<section id="master_top"class ="section">
        <p id = "pseudo"><strong>Pseudo</strong></p>
        <input id="master_input"type="text" maxlength="15" name="pseudo">
        <select name="sex" id="sex_select"> 
          <option value="NULL">Sex</option>
          <option value="homme">Homme</option>
          <option value="femme">Femme</option>
          <option value="NULL">On s'en fou</option>
       </select>
</section>
<div id="main_bot" class ="section">
      <form id="join_bottom" action="" methode="post">
        <p class="">Identifiant partie</p><br/>
        <input type="text"  name="game_id" id="join_input"  maxlength="15">
        <input type="hidden" name="username" value="" id="hidden_username">
        <input type="hidden" name="method" value="join_game">
        <input type="hidden" name="controller" value="PlayerController">
        <input type="hidden" name="sex" value="" id="hidden_sex">
        <input type="submit" class="ok"value="Rejoindre">
      </form>
</div>
<script>
  document.getElementById("master_input").onchange = function() {
    document.getElementById("hidden_username").value = document.getElementById("master_input").value;
  }
  document.getElementById("sex_select").onchange = function() {
    document.getElementById("hidden_sex").value = document.getElementById("sex_select").value;
  }
</script>