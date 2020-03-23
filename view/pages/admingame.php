<div id="main_top" class ="section">
      <div class="p_section">
        <p><?php echo $challenge->name; ?></p>
        <form action="" method="get">
          <input type="hidden" name="controller" value="PartyController">
          <input type="hidden" name="method" value="sort">
          <input type="hidden" name="admin" value="<?php echo $party->admin; ?>">
          <input type="submit" value="Suivant">
        </form>
      </div>
</div>
<div id="main_bot" class ="section">
      <p class="p_section">Liste des joueurs</p>
</div>
