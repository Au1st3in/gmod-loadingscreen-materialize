<?php
	/*
		Make sure to configure the sv_loadingurl in your server.cfg correctly before reporting an issue.
		An example sv_loadingurl is:
		sv_loadingurl "http://www.au1st3in.net/gmod/index.php?steamid=%s&mapname=%m"

		In the browser DO NOT use ?steamid=%s&mapname=%m just simply type in the URL like this: http://www.au1st3in.net/gmod/
	*/

	// GENERAL SETTINGS
	$serverIP = $_SERVER["REMOTE_ADDR"];
	$serverPort = "27015";

	$default_steam64 = '76561198026915793'; // Default Steam64 ID if you're viewing in browser
	$default_map = 'gm_flatgrass'; // Default map if you're viewing in browser
	$SteamAPIKey = ''; // SteamAPI key (http://steamcommunity.com/dev/apikey)
	$SteamWorkshopid = ''; // Steam Workshop Content ID (http://steamcommunity.com/sharedfiles/filedetails/?id=XXXXXXXXX)


	$enable_music = true; // Enable music? (Selects random .ogg soundfile from the music directory) (true / false) (Default: true)
	$music_volume = 0.5; // Music volume (Default: 0.5) Can be anywhere from 0.1 to 1


	$materialize_text_color = 'white'; // Hex or colour name (Default: #FFF)
	$materialize_card_color = 'teal darken-3'; // Hex or colour name (Default: #FFF)
	$toast_join_message = 'Thank you for joining our server, have fun!';

	// Alternatively, use youtube IDs for music instead of the music directory(Music has to be enabled for this to work):
	// A youtube ID is the string after v= in a youtube URL.
	// Youtube_names is the name of the track.
	$youtube_ids = array(
		'',
		''
	);
	$youtube_names = array(
		'',
		''
	);

	// BACKGROUND SETTINGS
	$bg_img = 'img/blue_gradient_abstract.jpg'; // URL or directory link for background image. It can be left blank (Default: img/metro.png)

?>
