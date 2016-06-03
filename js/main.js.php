<script>
		function GameDetails(servername, serverurl, mapname, maxplayers, steamid, gamemode){
			var servername= servername
			var gamemode= gamemode
			var maxplayers= maxplayers
			document.getElementById("servername").innerHTML=servername;
			document.getElementById("gamemode").innerHTML=gamemode;
			document.getElementById("maxplayers").innerHTML=maxplayers;
		}

		function SetStatusChanged(status){
			var status= status;
			document.getElementById("status").innerHTML=status;
		}
		function SetFilesTotal(total){
			var total= total;
			document.getElementById("total").innerHTML=total;
		}
		function SetFilesNeeded(needed){
			var needed= needed;
			document.getElementById("needed").innerHTML=needed;
		}
		function DownloadingFile(fileName){
			var dfile= fileName;
			document.getElementById("fileDL").innerHTML=dfile;
			var total= document.getElementById('total').innerHTML;
			var needed= document.getElementById('needed').innerHTML;
			CalcPercentage(parseInt(total), parseInt(needed));
		}
		function CalcPercentage(total, needed){
			var perc= Math.round((needed/total)*100);
			var percent= 100-perc;
			document.getElementById("progressbar").style.width=percent+'%';
			document.getElementById("percent").innerHTML=percent;
		}

		function setVolume(){
			music=document.getElementById("music");
			music.volume= <?php echo $music_volume; ?>;
		}
		window.onload= setVolume;

		$(document).ready(function(){
		  $('.carousel').carousel({
		    dist:0,
		    shift:0,
		    padding:0,
		  });
		});
		autoplay()
		function autoplay() {
		    $('.carousel').carousel('next');
		    setTimeout(autoplay, 10000);
		}

		window.onload = function(){
			Materialize.toast('<?php echo $toast_join_message; ?>', 50000, 'rounded') ;
		};

		$('#info').css({marginTop: '-=80px'});
		$('.mi-valign').css({marginTop: '+=20px'});
</script>
