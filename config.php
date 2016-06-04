<?php
	/*
		Make sure to configure the sv_loadingurl in your server.cfg correctly before reporting an issue.
		An example sv_loadingurl is:
		sv_loadingurl "http://example.com/gmod/index.php?steamid=%s&mapname=%m""

		In the browser DO NOT use ?steamid=%s&mapname=%m just simply type in the URL like this: http://example.com/gmod/
	*/

	// GENERAL SETTINGS
	$serverIP = $_SERVER['REMOTE_ADDR'];
	$serverPort = '27015';
	$serverName = "Garry's Mod Server";
	$serverWelcome = "Welcome back, ";
	$serverRules = "<li>Don't mess with other Players. [<i>Ex. Killing or Deleting Props</i>]</li>
	                <li>Don't Spam. [<i>Ex. Mic, Chat and Props</i>]</li>
	                <li>Don't try to overflow the Server. [<i>Ex. Spawning too Many NPCs</i>]</li>
	                <li>Don't use any Cheats/Exploits.</li>
	                <li>Respect the Admins</li>";

	$default_steam64 = '76561197960279927'; // Default Steam64 ID if you're viewing in browser
	$default_map = 'gm_flatgrass'; // Default map if you're viewing in browser
	$SteamAPIKey = ''; // SteamAPI Key (http://steamcommunity.com/dev/apikey)
	$SteamWorkshopid = ''; // Steam Workshop Content ID (http://steamcommunity.com/sharedfiles/filedetails/?id=XXXXXXXXX)

	$enable_music = true; // Enable music? (Selects random .ogg soundfile from the music directory) (true/false)
	$music_volume = 0.5; // Music volume (Default: 0.5) Can be anywhere from 0.1 to 1

	$materialize_text_color = 'white'; // Materialize Color Name ($materialize_text_color-text) [http://materializecss.com/color.html]
	$materialize_card_color = 'teal darken-3'; // Materialize Color Name [http://materializecss.com/color.html]
	$materialize_waves_color = 'teal'; // Materialize Wave Color (waves-$materialize_waves_color) [http://materializecss.com/color.html]

	$toast_join_message = 'Thank you for joining our server, have fun!';
	$bg_img = 'img/blue_gradient_abstract.jpg'; // URL or directory link for background image.

	// Alternatively, use youtube IDs for music instead of the music directory
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
?>
