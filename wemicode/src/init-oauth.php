<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=1070360497309892730&redirect_uri=http%3A%2F%2Flocalhost%2Fwemicode%2Fsrc%2Fprocess-oauth.php&response_type=code&scope=guilds%20guilds.join%20identify";
header("Location: $discord_url");
exit();

?>