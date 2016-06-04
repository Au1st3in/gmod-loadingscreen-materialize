Garry's Mod Materialize Loading Screen
==================

<p align="center"><br>
  <img src="https://github.com/Au1st3in/gmod-loadingscreen-materialize/blob/master/img/gmod-loadingscreen-materialize.png?raw=true" width=“100%” height=“100%”/>
</p>
Materialize themed loading screen for Garry's Mod with Steam Web API support.

## Features

- Image Autoplay Slideshow Carousel
- Autoplay Background Music (w/ YouTube Support)
- Materialize Toast Welcome Message
- Displays current map name, gamemode, max players, server ip, steamid, and much more.

## Instructions

* Requires a Steam Web API Key (http://steamcommunity.com/dev/apikey)
* Place any Music files in `.ogg` format in the music folder or utilize the YouTube functionality in the config.php
* Place any slideshow photos in `img/carousel`, they will automatically be loaded into the carousel (png/jpeg)
* Follow the Instuctions found within the file `config.php` and edit the contents
* Set the URL of the loading screen in your `server.cfg` like that `sv_loadingurl "http://example.com/index.php?steamid=%s&mapname=%m"`

## Credits
* Dogfalo (https://github.com/Dogfalo/materialize)
* GabrielWanzek (https://github.com/GabrielWanzek/gmod-loadingscreen)
* Marcuzz (https://github.com/Marcuzz/MetroLoad)

## Documentation
* Materialize CSS (http://materializecss.com)
* Steam Web API (https://developer.valvesoftware.com/wiki/Steam_Web_API)

_Requires PHP_ &middot; _Built with [Materialize](http://materializecss.com)_
