<section id="master_top" class ="section">
    <form action="" methode="get" id="pseudo">
        <p>Ajoute des gages</p>
        <input id="input_gage" type="text" maxlength="30" name="challenge">
        <input type="hidden" name="controller" value="PartyController">
        <input type="hidden" name="method" value="add_challenge">
        <input type="hidden" name="game_id" value="<?php echo $_GET['game_id']; ?>">
        <input type="hidden" name="page" value="play">
        <input class="ok" type="submit" value="Ok">
    </form>
</section>
<div id="main_bot" class ="section">
    <p id="game_link">Options de partage</p><br/>
    <p id="link"><?php echo $_GET['game_id'] ?> </p>
</div>
