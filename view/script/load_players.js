
function loadPlayers() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var players = JSON.parse(this.responseText);
            console.log(players.length);
            var playersText = "";
            for(var i = 0; i < players.length; i++){
              playersText += " " + players[i].username;
            }
            document.getElementById("player_list").innerHTML = playersText;
       }
    };
    xhttp.open("GET", "?controller=PartyController&method=api_getPlayers&id=" + partyId, true);
    xhttp.send();
}
loadPlayers();
window.setInterval(loadPlayers, 500);
