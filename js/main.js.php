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
<?php if($steamid64 == '76561198026915793') { ?>
	<script>var retina=window.devicePixelRatio,PI=Math.PI,sqrt=Math.sqrt,round=Math.round,random=Math.random,cos=Math.cos,sin=Math.sin,rAF=window.requestAnimationFrame,cAF=window.cancelAnimationFrame||window.cancelRequestAnimationFrame,_now=Date.now||function(){return(new Date).getTime()};!function(t){function i(t){var i=_now(),n=Math.max(0,16-(i-s)),o=setTimeout(t,n);return s=i,o}var s=_now(),n=t.cancelAnimationFrame||t.webkitCancelAnimationFrame||t.clearTimeout;rAF=t.requestAnimationFrame||t.webkitRequestAnimationFrame||i,cAF=function(i){n.call(t,i)}}(window),document.addEventListener("DOMContentLoaded",function(){function t(i,s){this.x=i,this.y=s,this.Length=function(){return sqrt(this.SqrLength())},this.SqrLength=function(){return this.x*this.x+this.y*this.y},this.Add=function(t){this.x+=t.x,this.y+=t.y},this.Sub=function(t){this.x-=t.x,this.y-=t.y},this.Div=function(t){this.x/=t,this.y/=t},this.Mul=function(t){this.x*=t,this.y*=t},this.Normalize=function(){var t=this.SqrLength();if(0!=t){var i=1/sqrt(t);this.x*=i,this.y*=i}},this.Normalized=function(){var i=this.SqrLength();if(0!=i){var s=1/sqrt(i);return new t(this.x*s,this.y*s)}return new t(0,0)}}function i(i,s,n,o){this.position=new t(i,s),this.mass=n,this.drag=o,this.force=new t(0,0),this.velocity=new t(0,0),this.AddForce=function(t){this.force.Add(t)},this.Integrate=function(i){var s=this.CurrentForce(this.position);s.Div(this.mass);var n=new t(this.velocity.x,this.velocity.y);n.Mul(i),this.position.Add(n),s.Mul(i),this.velocity.Add(s),this.force=new t(0,0)},this.CurrentForce=function(i,s){var n=new t(this.force.x,this.force.y),o=this.velocity.Length(),e=new t(this.velocity.x,this.velocity.y);return e.Mul(this.drag*this.mass*o),n.Sub(e),n}}function s(i,n){this.pos=new t(i,n),this.rotationSpeed=600*random()+800,this.angle=p*random()*360,this.rotation=p*random()*360,this.cosA=1,this.size=5,this.oscillationSpeed=1.5*random()+.5,this.xSpeed=40,this.ySpeed=60*random()+50,this.corners=new Array,this.time=random();var o=round(random()*(d.length-1));this.frontColor=d[o][0],this.backColor=d[o][1];for(var e=0;4>e;e++){var r=cos(this.angle+p*(90*e+45)),a=sin(this.angle+p*(90*e+45));this.corners[e]=new t(r,a)}this.Update=function(t){this.time+=t,this.rotation+=this.rotationSpeed*t,this.cosA=cos(p*this.rotation),this.pos.x+=cos(this.time*this.oscillationSpeed)*this.xSpeed*t,this.pos.y+=this.ySpeed*t,this.pos.y>s.bounds.y&&(this.pos.x=random()*s.bounds.x,this.pos.y=0)},this.Draw=function(t){this.cosA>0?t.fillStyle=this.frontColor:t.fillStyle=this.backColor,t.beginPath(),t.moveTo((this.pos.x+this.corners[0].x*this.size)*retina,(this.pos.y+this.corners[0].y*this.size*this.cosA)*retina);for(var i=1;4>i;i++)t.lineTo((this.pos.x+this.corners[i].x*this.size)*retina,(this.pos.y+this.corners[i].y*this.size*this.cosA)*retina);t.closePath(),t.fill()}}function n(s,o,e,r,a,h,c,l){this.particleDist=r,this.particleCount=e,this.particleMass=c,this.particleDrag=l,this.particles=new Array;var u=round(random()*(d.length-1));this.frontColor=d[u][0],this.backColor=d[u][1],this.xOff=cos(p*h)*a,this.yOff=sin(p*h)*a,this.position=new t(s,o),this.prevPosition=new t(s,o),this.velocityInherit=2*random()+4,this.time=100*random(),this.oscillationSpeed=2*random()+2,this.oscillationDistance=40*random()+40,this.ySpeed=40*random()+80;for(var y=0;y<this.particleCount;y++)this.particles[y]=new i(s,o-y*this.particleDist,this.particleMass,this.particleDrag);this.Update=function(i){var s=0;this.time+=i*this.oscillationSpeed,this.position.y+=this.ySpeed*i,this.position.x+=cos(this.time)*this.oscillationDistance*i,this.particles[0].position=this.position;var o=this.prevPosition.x-this.position.x,e=this.prevPosition.y-this.position.y,r=sqrt(o*o+e*e);for(this.prevPosition=new t(this.position.x,this.position.y),s=1;s<this.particleCount;s++){var a=t.Sub(this.particles[s-1].position,this.particles[s].position);a.Normalize(),a.Mul(r/i*this.velocityInherit),this.particles[s].AddForce(a)}for(s=1;s<this.particleCount;s++)this.particles[s].Integrate(i);for(s=1;s<this.particleCount;s++){var h=new t(this.particles[s].position.x,this.particles[s].position.y);h.Sub(this.particles[s-1].position),h.Normalize(),h.Mul(this.particleDist),h.Add(this.particles[s-1].position),this.particles[s].position=h}this.position.y>n.bounds.y+this.particleDist*this.particleCount&&this.Reset()},this.Reset=function(){this.position.y=-random()*n.bounds.y,this.position.x=random()*n.bounds.x,this.prevPosition=new t(this.position.x,this.position.y),this.velocityInherit=2*random()+4,this.time=100*random(),this.oscillationSpeed=2*random()+1.5,this.oscillationDistance=40*random()+40,this.ySpeed=40*random()+80;var s=round(random()*(d.length-1));this.frontColor=d[s][0],this.backColor=d[s][1],this.particles=new Array;for(var o=0;o<this.particleCount;o++)this.particles[o]=new i(this.position.x,this.position.y-o*this.particleDist,this.particleMass,this.particleDrag)},this.Draw=function(i){for(var s=0;s<this.particleCount-1;s++){var n=new t(this.particles[s].position.x+this.xOff,this.particles[s].position.y+this.yOff),o=new t(this.particles[s+1].position.x+this.xOff,this.particles[s+1].position.y+this.yOff);this.Side(this.particles[s].position.x,this.particles[s].position.y,this.particles[s+1].position.x,this.particles[s+1].position.y,o.x,o.y)<0?(i.fillStyle=this.frontColor,i.strokeStyle=this.frontColor):(i.fillStyle=this.backColor,i.strokeStyle=this.backColor),0==s?(i.beginPath(),i.moveTo(this.particles[s].position.x*retina,this.particles[s].position.y*retina),i.lineTo(this.particles[s+1].position.x*retina,this.particles[s+1].position.y*retina),i.lineTo(.5*(this.particles[s+1].position.x+o.x)*retina,.5*(this.particles[s+1].position.y+o.y)*retina),i.closePath(),i.stroke(),i.fill(),i.beginPath(),i.moveTo(o.x*retina,o.y*retina),i.lineTo(n.x*retina,n.y*retina),i.lineTo(.5*(this.particles[s+1].position.x+o.x)*retina,.5*(this.particles[s+1].position.y+o.y)*retina),i.closePath(),i.stroke(),i.fill()):s==this.particleCount-2?(i.beginPath(),i.moveTo(this.particles[s].position.x*retina,this.particles[s].position.y*retina),i.lineTo(this.particles[s+1].position.x*retina,this.particles[s+1].position.y*retina),i.lineTo(.5*(this.particles[s].position.x+n.x)*retina,.5*(this.particles[s].position.y+n.y)*retina),i.closePath(),i.stroke(),i.fill(),i.beginPath(),i.moveTo(o.x*retina,o.y*retina),i.lineTo(n.x*retina,n.y*retina),i.lineTo(.5*(this.particles[s].position.x+n.x)*retina,.5*(this.particles[s].position.y+n.y)*retina),i.closePath(),i.stroke(),i.fill()):(i.beginPath(),i.moveTo(this.particles[s].position.x*retina,this.particles[s].position.y*retina),i.lineTo(this.particles[s+1].position.x*retina,this.particles[s+1].position.y*retina),i.lineTo(o.x*retina,o.y*retina),i.lineTo(n.x*retina,n.y*retina),i.closePath(),i.stroke(),i.fill())}},this.Side=function(t,i,s,n,o,e){return(t-s)*(e-n)-(i-n)*(o-s)}}var o=50,e=1/o,r=11,a=30,h=8,c=8,l=95,p=PI/180,d=[["#df0049","#660671"],["#00e857","#005291"],["#2bebbc","#05798a"],["#ffd200","#b06c00"]];t.Lerp=function(i,s,n){return new t((s.x-i.x)*n+i.x,(s.y-i.y)*n+i.y)},t.Distance=function(i,s){return sqrt(t.SqrDistance(i,s))},t.SqrDistance=function(t,i){var s=t.x-i.x,n=t.y-i.y;return s*s+n*n+z*z},t.Scale=function(i,s){return new t(i.x*s.x,i.y*s.y)},t.Min=function(i,s){return new t(Math.min(i.x,s.x),Math.min(i.y,s.y))},t.Max=function(i,s){return new t(Math.max(i.x,s.x),Math.max(i.y,s.y))},t.ClampMagnitude=function(i,s){var n=i.Normalized;return new t(n.x*s,n.y*s)},t.Sub=function(i,s){return new t(i.x-s.x,i.y-s.y,i.z-s.z)},s.bounds=new t(0,0),n.bounds=new t(0,0),u={},u.Context=function(i){var o=0,p=document.getElementById(i),d=p.parentNode,y=d.offsetWidth,f=d.offsetHeight;p.width=y*retina,p.height=f*retina;var x=p.getContext("2d"),m=new Array;for(n.bounds=new t(y,f),o=0;r>o;o++)m[o]=new n(random()*y,-random()*f*2,a,h,c,45,1,.05);var w=new Array;for(s.bounds=new t(y,f),o=0;l>o;o++)w[o]=new s(random()*y,random()*f);this.resize=function(){y=d.offsetWidth,f=d.offsetHeight,p.width=y*retina,p.height=f*retina,s.bounds=new t(y,f),n.bounds=new t(y,f)},this.start=function(){this.stop();this.update()},this.stop=function(){cAF(this.interval)},this.update=function(){var t=0;for(x.clearRect(0,0,p.width,p.height),t=0;l>t;t++)w[t].Update(e),w[t].Draw(x);for(t=0;r>t;t++)m[t].Update(e),m[t].Draw(x);this.interval=rAF(function(){u.update()})}};var u=new u.Context("confetti");u.start(),window.addEventListener("resize",function(t){u.resize()})});</script>
<?php } ?>
