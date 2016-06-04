<?php
  include('config.php');

  error_reporting(0);
  @set_time_limit(3);

  if(!isset($_GET["steamid"])){
    $userID = $default_steam64;
  } else {
    $userID = $_GET["steamid"];
  }

  function convertCommunityIdToSteamId($communityId) {
    $steamId1  = substr($communityId, -1) % 2;
    $steamId2a = intval(substr($communityId, 0, 4)) - 7656;
    $steamId2b = substr($communityId, 4) - 1197960265728;
    $steamId2b = $steamId2b - $steamId1;

    return "STEAM_0:$steamId1:" . (($steamId2a + $steamId2b) / 2);
  }

  $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $SteamAPIKey . "&steamids=" . $userID;
  $json = file_get_contents($url);
  $table2 = json_decode($json, true);
  $table = $table2["response"]["players"][0];

  $username = $table['personaname'];
  $avatar = $table['avatarfull'];
  $steamid64 = $table['steamid'];
  $mapname = $_GET['mapname'];
  if(!isset($mapname)){
    $mapname = $default_map;
  }

  if($enable_music && $youtube_ids[0] == '') {
    $dir = 'music';
    foreach(glob($dir.'/*.ogg') as $file) {
      $files[] = $file;
    }
    $n = array_rand($files);
    $play = $files[$n];
    $play_name = str_replace('music/', '', $play);
    $play_name = str_replace('.ogg', '', $play_name);

    if (file_exists('music/' . $play_name . ".txt")) {
      $play_file = file_get_contents('music/' . $play_name . ".txt");
      $play_name = $play_file;
    }
  }

  if($enable_music && $youtube_ids[0] != '') {
    $n = array_rand($youtube_ids);
    $youtube_id = $youtube_ids[$n];
    $youtube_name = $youtube_names[$n];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo $username; ?></title>
    <meta name="author" content="Au1st3in">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="css/animations.min.css">
    <style>#toast-container{top:auto;right:auto;bottom:5%;left:10%}</style>
  </head>
  <body background="<?php echo $bg_img; ?>">
    <div class="container <?php echo $materialize_text_color; ?>-text">
      <div class="section hide-on-med-and-down"><br><br><br><br>
        <div class="row">
          <div class="col s6">
            <div class="card-panel hoverable <?php echo $materialize_card_color; ?> waves-effect waves-block waves-<?php echo $materialize_waves_color; ?> bigEntrance">
              <h4 class="center-align bigEntrance"><i class="material-icons mi-valign">dns</i>&nbsp;<?php echo $serverName; ?><h4><br>
              <div class="carousel bigEntrance" style="height: 200px;">
                <?php $i = 0; foreach(glob('img/carousel/*.{jpg,png}', GLOB_BRACE) as $image): $i++; ?>
                  <a class="carousel-item" href="#<?php echo $i; ?>!"><img src="<?php echo $image; ?>"></a>
                <?php endforeach; ?>
              </div>
              <ul id="info" class="bigEntrance" style="font-size:18px">
                <li>&nbsp;&nbsp;&nbsp;<i class="material-icons mi-valign">my_location</i>&nbsp;&nbsp;&nbsp;<b>Map:</b>&nbsp;<?php echo $mapname; ?></li>
                <li>&nbsp;&nbsp;&nbsp;<i class="material-icons mi-valign">games</i>&nbsp;&nbsp;&nbsp;<b>Gamemode:</b>&nbsp;<div id="gamemode" style="display: inline;">Sandbox</div></li>
                <li>&nbsp;&nbsp;&nbsp;<i class="material-icons mi-valign">supervisor_account</i>&nbsp;&nbsp;&nbsp;<b>Max Players:</b>&nbsp;<div id="maxplayers" style="display: inline;">128</div></li>
                <li>&nbsp;&nbsp;&nbsp;<i class="material-icons mi-valign">language</i>&nbsp;&nbsp;&nbsp;<b>Server IP:</b>&nbsp;<?php echo $serverIP; ?>:<?php echo $serverPort; ?></li>
              </ul>
            </div>
            <div class="card-panel hoverable <?php echo $materialize_card_color; ?> waves-effect waves-block waves-<?php echo $materialize_waves_color; ?> bigEntrance">
              <h5 class="center-align bigEntrance"><i class="material-icons mi-valign">description</i>&nbsp;&nbsp;&nbsp;Server Rules<h5>
              <ol class="bigEntrance" style="font-size:18px" type="1">
                <?php echo $serverRules; ?>
              </ol>
            </div>
          </div>
          <div class="col s6">
            <div class="card-panel hoverable <?php echo $materialize_card_color; ?> waves-effect waves-block waves-<?php echo $materialize_waves_color; ?> bigEntrance">
              <p class="center-align bigEntrance"><img src="<?php echo $avatar; ?>" class="circle"></p>
              <h3 class="center-align bigEntrance"><?php echo $serverWelcome; ?><?php echo $username; ?>!</h3>
              <p class="center-align bigEntrance"><i class="material-icons mi-valign prefix">verified_user</i>&nbsp;<?php echo convertCommunityIdToSteamId($steamid64); ?></p>
            </div>
            <?php if($enable_music) { ?>
            <div class="card-panel hoverable <?php echo $materialize_card_color; ?> waves-effect waves-block waves-<?php echo $materialize_waves_color; ?> bigEntrance">
              <?php if($youtube_ids[0] == '') { ?>
        				<audio id="music" autoplay='1' loop src='<?php echo $play; ?>'></audio>
                <div class="input-field col s12 bigEntrance">
                  <i class="material-icons prefix">library_music</i>
                  <input id="icon_prefix" type="text" disabled>
                  <label for="icon_prefix" class="<?php echo $materialize_text_color; ?>-text">Now Playing:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $play_name; ?></label>
                </div>
        			<?php } else { ?>
                <div style="position:relative;width:267px;height:0px;overflow:hidden;">
          				<div style="position:absolute;bottom:-500px;left:-50px">
          					<iframe width="300" height="300" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0&autoplay=1"></iframe>
          				</div>
          			</div>
                <div class="input-field col s12 bigEntrance">
                  <i class="material-icons prefix">library_music</i>
                  <input id="icon_prefix" type="text" disabled>
                  <label for="icon_prefix" class="<?php echo $materialize_text_color; ?>-text">Now Playing:&nbsp;<?php echo $youtube_name; ?></label>
                </div>
              <?php }?>
            </div>
            <?php } ?>
            <div class="card-panel hoverable <?php echo $materialize_card_color; ?> waves-effect waves-block waves-<?php echo $materialize_waves_color; ?> bigEntrance">
              <div class="valign-wrapper">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-floating btn-large waves-effect waves-<?php echo $materialize_waves_color; ?> teal darken-4 tooltipped bigEntrance" data-position="bottom" data-delay="50" data-tooltip="Workshop Content" href="http://steamcommunity.com/sharedfiles/filedetails/?id=<?php echo $SteamWorkshopid; ?>" target="_blank"><i class="material-icons">library_add</i>Workshop Content</a>
                <h5 class="valign bigEntrance">&nbsp;&nbsp;&nbsp;&nbsp;<i><div id="status" style="display: inline;">Retrieving Server Info...</div></i></h5>
              </div>
              <div class="right-align bigEntrance"><p><i><div id="fileDL" style="display: inline;">No Files Downloading</div></i> [<div id="percent" style="display: inline;">0</div>%]<br>
              <div id="needed" style="display: inline;">Needed</div>/<div id="total" style="display: inline;">Total</div></p></div>
              <div class="progress bigEntrance">
                <div class="determinate" id="progressbar"</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
      <?php
        include('js/main.js.php');
      ?>
    </footer>
  </body>
</html>
