Garry's Mod Material Design Loading Screen
==================

![](https://raw.githubusercontent.com/Au1st3in/gmod-loadingscreen-materialize/master/img/gmod-loadingscreen-materialize.png)
Materialize themed PHP based loading screen for Garry's Mod with Steam Web API support.

## Features

- Image Autoplay Slideshow Carousel
- Autoplay Background Music (w/ YouTube Support)
- Materialize Toast Welcome Message
- Displays current map name, gamemode, max players, server ip, steamid, and much more.

## Instructions

* Requires a Steam Web-API Key (http://steamcommunity.com/dev/apikey)
* Place any Music files in `.ogg` format in the music folder or utilize the YouTube functionality in the config.php
* Place any slideshow photos in `img/carousel`, they will automatically be loaded in
* Follow the Instuctions found within the file `config.php` and edit the contents
* Set the URL of the loading screen in your `server.cfg` like that `sv_loadingurl "http://example.com/gmod-loadingscreen-materialize/index.php?steamid=%s&mapname=%m"`

## Credits
* Dogfalo (https://github.com/Dogfalo/materialize)
* GabrielWanzek (https://github.com/GabrielWanzek/gmod-loadingscreen)
* Marcuzz (https://github.com/Marcuzz/MetroLoad)

## Documentation
* Materialize CSS (http://materializecss.com)
* Steam Web-API (https://developer.valvesoftware.com/wiki/Steam_Web_API)

_Requires PHP_ &middot; _Built with [Materialize](http://materializecss.com)_
