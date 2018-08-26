<!DOCTYPE html>

<html>


<head>

    <meta charset="utf-8">
    
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
    <style type="text/CSS">
        body{
           font-family: 'Raleway', sans-serif;
           background-color:#E6DADA;
           height:auto;
           font-size:26px;
           overflow-x:hidden;
        }
        .main{
            width:200px;
            border-radius:15px;
            border-bottom-left-radius:0px;
            border-bottom-right-radius:0px;
            height:335px;
            position:absolute;
            bottom:-168px;
            left:100px;
            transform: translate(-50%,-50%);
            background-color: #C6426E;
        }
        .cover{
            height:180px;
            width:200px;
            border-top-left-radius:15px;
            border-top-right-radius:15px;
            top:0px;
            z-index:1;
        }
        .player{
            padding: 15px;
            color:#decba4;
        }
       .song_title{
           font-family: 'Raleway', sans-serif;
           font-size:20px;
           position:absolute;
           width:100%;
           text-align:center;
            top:65%;
            left:50%;
            transform: translate(-50%,-50%);
            color :#FFFFFF;
        }
        .controls{
            height:50px;
            width:100%;
            position:absolute;
            left:20%;
            padding-top:60px;
            z-index:99;
        }
        .play{
            border:0;
            background-color: transparent;
            cursor: pointer;
            outline:none;
            z-index:99;

        }
        .pre{
            border:0;
            cursor: pointer;
            background-color: transparent;
            z-index:99;

        }
        .next{
            border:0;
            cursor: pointer;
            background-color: transparent;
            z-index:99;

        }
        .seek_bar_vol {
            width:100px;
            height:2px;
            background-color: #780206;
            display:none;
            position:absolute;
            bottom:15px;
            right:40px;
            cursor: pointer;
            border-radius:4px;
            z-index:99;
            display:none;
        }
        .seek_bar_vol:hover {
            width:100px;
            height:2px;
            background-color: #780206;
            display:none;
            position:absolute;
            bottom:15px;
            right:40px;
            cursor: pointer;
            border-radius:4px;
            z-index:99;
            display:inline;
        }
        .fill_vol{
            height:2.2px;
            width:100px;
            position:absolute;
            bottom:0px;
            background-color:#FFFFFF;
            border-radius:20px;
        }
        .handle_vol{
            width:4px;
            height:4px;
            right:0.5px;
            background-color:#FFFFFF;
            position:relative;
            border-radius:50%;
            transform:scale(1.9);
        }
        
        .seek_bar {
            width:200px;
            height:5px;
            background-color: gray;
            display:flex;
            position:absolute;
            top:180px;
            left:0;
            cursor: pointer;
            border-top-right-radius:2px;
            border-bottom-right-radius:2px;
            z-index:99;
        }
        .fill{
            height:5px;
            width:33px;
            position:absolute;
            top:0px;
            background-color:#FFFFFF;
            border-radius:20px;
            z-index:99;
        }
        .handle{
            width:5px;
            height:5px;
            left:33px;
            top:-1px;
            background-color:#FFFFFF;
            position:absolute;
            border-radius:50%;
            transform:scale(1.9);
            bottom:0.1px;
            z-index:99;
        }
        
        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
        ul {
            list-style: none;
            position:relative;
            overflow-y:scroll;
            max-height:740px;
            z-index:3;
        }
        .btn.btn-primary:focus{
            border:none;
            box-shadow: none;
        }
        .btn.btn-primary:active{
            border:none;
            box-shadow: none;
        }
        .modal-dialog{
            width:200px;
            height:90px;
        }
        .modal-content{
            position:absolute;
            width:680px;
            margin-top:40px;
            left:-190px;
        }
        .btn.btn-secondary{
            background-color:#c31432;
        }
        .btn.btn-primary{
            position:absolute;
            left:0;
            bottom:0;
            background-color:#c31432;
            opacity:1.2;
            border:none;
            z-index:99;
            width:25px;
        }
        .btn.btn-primary{
            position:absolute;
            right:150px;
            bottom:0;
            background-color:#c31432;
            opacity:0.6;
            border:none;
            z-index:99;
            width:25px;
        }
        .modal-body{
            font-family: 'Raleway', sans-serif;
            font-size:18px;
            white-space:pre-wrap;
            color:#2980B9;
            text-align:center;
        }
        .btn.btn-primary.dropdown{
            position:fixed;
            right:0;
            height:30px;
            top:0;
            width:290px;
            background-color:#516395;
            border:none;
        }
        .dropdown{
            position: fixed;
            right: -0px;
            height: 30px;
            top: 0;
            width: 290px;
            font-size:16px;
            background-color: #516395;
            border: none;
            border-radius:3px;
            margin-bottom:10px;
        }
        .dropdown-toggle{
            width:300px;
            color:#FFFFFF;
            margin-top:-10px;
            background-color:transparent;
            border:none;
            outline:none;
            color:#decba4;
        }
    </style>
  
<body onload="player();auto_close_control_volume();" style="cursor:default">
<div id="TxtHint" style="top:0">
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" title="Perdu? Cliques ici!" data-toggle="modal" data-target="#exampleModal">
<span style="margin-left:-5px;opacity:1.3">
?</span>
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center;z-index:99;background-color:#FFFFFF">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;margin-left:290px"><center>Astuces</center></h5>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="z-index:99">X</button>
      </div>
           
      <div class="modal-body" style="margin-top:-25px;max-height:600px;overflow-y:scroll;z-index:3">
      <div style="position:relative" style="margin-top:-50px">
        <div class="btn" style="border:0.2px solid gray;font-size:20px;height:30px;width:200px;margin:0 auto;right:30px">
        <span style="position:relative;right:6px;bottom:5px">Espace</span></div><br><La touche espace sert à controler la lecture/pause</div>
        <div class="dropdown-divider"><p>100</p></div>
        <div style="position:relative" style="top:-90px">
        <div class="btn" style="border:0.2px solid gray;font-weight:bold;font-size:20px;height:30px;width:30px;margin:0 auto;">
        <span style="position:relative;right:6px;bottom:8px">→</span></div><br> La flèche directionnelle droite lance la musique suivante</div>
        <div class="dropdown-divider"><p>100</p></div>

        <div style="position:relative" style="margin-top:-90px">
        <div class="btn" style="border:0.2px solid gray;font-weight:bold;font-size:20px;height:30px;width:30px;margin:0 auto;">
        <span style="position:relative;right:9px;bottom:8px">←</span></div><br> La flèche directionnelle gauche lance la musique précèdente</div>
        <div class="dropdown-divider"><p>100</p></div>
        <div style="position:relative" style="top:-90px">
        <div class="btn" style="border:0.2px solid gray;font-size:20px;height:30px;width:30px;margin:0 auto;">
        <span style="position:relative;right:4px;bottom:5px">R</span></div><br> La touche 'R' réinitialise la durée de la musique</div>
        <div class="dropdown-divider"><p>100</p></div>
        <div style="position:relative" style="top:-90px">
        <div class="btn" style="border:0.2px solid gray;font-size:20px;height:30px;width:30px;margin:0 auto;">
        <span style="position:relative;right:4px;bottom:5px">D</span></div><br> La touche 'D' récupère la playlist en cours d'écoute
        dans un ordre de pistes aléatoire</div>
        <div class="dropdown-divider"><p>100</p></div>
        <div style="position:relative" style="top:-90px">
        <div class="btn" style="border:0.2px solid gray;font-weight:bold;font-size:20px;height:30px;width:30px;margin:0 auto;">
        <span style="position:relative;right:2px;bottom:8px">↑</span></div><br> La flèche directionnelle vers le haut augmente le volume du lecteur</div>
        <div class="dropdown-divider"><p>100</p></div>
        <div style="position:relative" style="top:-90px">
        <div class="btn" style="border:0.2px solid gray;font-weight:bold;font-size:20px;height:30px;width:30px;margin:0 auto;">
        <span style="position:relative;right:2px;bottom:8px">↓</span></div><br> La flèche directionnelle vers le bas diminue le volume du lecteur</div>
      </div>

      <div class="modal-footer" style='margin-bottom:-60px;margin-left:-80px'>
      En cas de panne ou pour toute assistance complémentaire, 
      les administrateurs sont joignables via la messagerie.

      Toute l'équipe de MyStudio vous souhaite une 
      agréable expérience sur notre site.

      Love
      </div>
      </div>
    </div>
  </div>
</div>
            <div class="main" id="main">
                    <img src='./img/kake.jpg' id="cover" class="cover" />
        <div class="btn" id="mus_op"
        style="position:fixed;left:-160px;opacity:0.2;background-color:#FFFFFF;top:0px;
        height:180px;border:0.2px solid gray;font-size:20px;width:0px;max-width:360px;margin:0 auto;right:30px;
        border-top-left-radius:30px;border-top-right-radius:12px">
                </div>
                <div class ="player" id="player">
                    <div id="song_title" class="song_title">
                        <div class="title" id="title">
                        Créé par
                        </div>
                        <div class="current_artist" id="artist" style="opacity:0.5;color:#FFFFFF">Sid Bee
                        </div>
                    </div>
                    <div class="controls">
                    
                        <button id="pre" class="pre" title="Musique précèdente" onclick="previous_song()" style="background-image:url('./img/pre.png');
                        background-size: 30px 30px;background-repeat:no-repeat;
                        height:30px;width:30px;position:absolute;right:180px;top:72px;outline:none;border:none"> </button>
            
                        <button id="play_or_pause" title="Play/pause" class="play_pause" onclick="play_or_pause(this.value)" 
                        style="background-image:url('./img/play.png');overflow:visible;background-size:100%;margin-left:30px;cursor:pointer;
                        width:80px;outline:none;background-color:#C6426E;background-repeat:no-repeat;outline:none;border:none;
                        height:50px;width:50px;mar" width="90px" value="0">
                        </button>
                        <button id="next" class="next" title="Musique suivante" onclick="next_song()" style="background-image:url('./img/next.png');
                        background-size: 30px 30px;background-repeat:no-repeat;
                        height:30px;width:30px;position:absolute;right:80px;top:72px;outline:none;border:none"> </button>
                        </div>
                    <div id="seek_bar" class="seek_bar" title="Contrôle du volume">
                        <div id="fill" class="fill">
                        </div>
                        <div class ="handle" id="handle">
                    </div>
                    </div>
                </div>
                    <button id="vol" class="vol" title="Controle volume" onclick="show_volume_control()" style="background-image:url('./img/high.png');
                        background-size: 30px 30px;background-repeat:no-repeat;
                        height:30px;width:30px;position:absolute;right:5px;top:80%;outline:none;border:none;z-index:99;background-color:transparent"> </button>
                        <div id="seek_bar_vol" class="seek_bar_vol" title="Contrôle du volume">
                        <div id="fill_vol" class="fill_vol">
                        </div>
                        <div class ="handle_vol" id="handle_vol">
                    </div>
                    </div>
            </div>
            <div class="dropdown" title="playlist en cours de lecture">
    <button class="dropdown-toggle" id="dropdown01" type="button"  style="outline:none;border:none"
    aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">Playlist en cours
    </button>
    <div style="position:absolute;top:5px;right:285px;height:auto">
                <ul class="dropdown-menu"  id="dropdown-menu" style="position:absolute;margin-top:0px;width:290px;margin-left:20px;max-height:200px;color:#333333;background-color:#FFFFFF;border:none;outline:none;overflow-x:hidden;overflow-y:hidden">
    <div style="position: relative;
    width: 307px;
    height: 209px;
    overflow: scroll;">
    <li id="dd" class="dd" style="font-size:16px;width:350px;height:25px;margin-left:0px;">
                    <div style="font-size:16px;width:350px;height:25px;display:inline;white-space:nowrap">
                    <button onclick="play_or_pause(this.value)" id="play_pause0" value="0" style="background:transparent;border:none;width:30px;display:inline;">
                    <img src="./img/play.png" height="20px" width="20px" id="play_or_pause0" style="margin-bottom:3px;margin-right:4px">
                    </button></a>
                    <span id="title0" style="white-space:nowrap;display:inline;left:30px;">Summer Knights</span>
                    <span style="white-space:nowrap"> - </span>
                    <span id="artist0" style="white-space:nowrap">Joey Bad4$$ </span>
                    <span style="white-space:nowrap"><a href="" target="_blank">Accèder à la page artiste</a></span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"><p>100</p></div>  
                <li id="dd" class="dd" style="font-size:16px;width:350px;height:25px;margin-left:0px;">
                    <div style="font-size:16px;width:350px;height:25px;display:inline;white-space:nowrap">
                    <button onclick="play_or_pause(this.value)" id="play_pause1" value="1" style="background:transparent;border:none;width:30px;display:inline;">
                    <img src="./img/play.png" height="20px" width="20px" id="play_or_pause1" style="margin-bottom:3px;margin-right:4px">
                    </button></a>
                    <span id="title1" style="white-space:nowrap;display:inline;left:30px;">Waves</span>
                    <span style="white-space:nowrap"> - </span>
                    <span id="artist1" style="white-space:nowrap">Joey Bad4$$ </span>
                    <span style="white-space:nowrap"><a href="">dsqdjsq vdjv dvsqk vdkl dsqd dsq dd sqd dsq dsd qs</a></span>
                    </div>
                    <audio src='./musics/Waves.mp3' preload ="none" id="audio1" preload="none"></audio>
                </li>
                <div class="dropdown-divider"><p>100</p></div>  
                <li id="dd" class="dd" style="font-size:16px;width:350px;height:25px;margin-left:0px;">
                    <div style="font-size:16px;width:350px;height:25px;display:inline;white-space:nowrap">
                    <button onclick="play_or_pause(this.value)" id="play_pause2" value="2" style="background:transparent;border:none;width:30px;display:inline;">
                    <img src="./img/play.png" height="20px" width="20px" id="play_or_pause2" style="margin-bottom:3px;margin-right:4px">
                    </button></a>
                    <span id="title2" style="white-space:nowrap;display:inline;left:30px;">World Domination</span>
                    <span style="white-space:nowrap"> - </span>
                    <span id="artist2" style="white-space:nowrap">Joey Bad4$$ </span>
                    <span style="white-space:nowrap"><a href="">Page artiste</a></span>
                    </div>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none"></audio>
                </li>
                <div class="dropdown-divider"><p>100</p></div>  
            </ul>
            </div>
            </div>
            <div id="lol"></div>
            <?php
            if(isset($_POST['song'])){
                echo '<br><br><br><br>b<br>';
                var_dump($_POST);
            }
            ?>
</body>
<script>
 function show_volume_control(){
     var vol = document.getElementById('seek_bar_vol');
         if(vol.style.display === 'none'){
             vol.style.display = 'block';
         } else {
            vol.style.display = 'none';

         }
     
 }
 </script>
<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("seek_bar"));

function dragElement(elmnt) {
    var pos = 0, ref_pos = 0,  cal_pos = 0,pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    elmnt.onmouseup = dragMouseDown;
    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        
        console.log('seek');
        pos4 = e.clientX;
        ref_pos = e.clientX;
        if(ref_pos >= 0 && ref_pos <= 200){
            var where = Number(document.getElementById('play_or_pause').value);
            playlist = document.getElementsByTagName('audio');
                var duration = Math.floor(playlist[where].duration);
                var cal = ref_pos/200;
                cal = Math.round(cal *360);
                if(cal >= 9){
                document.getElementById('mus_op').style.width = cal +"px";
                } else {
                    cal = 0;
                document.getElementById('mus_op').style.width = cal +"px";

                document.getElementById('mus_op').style.display = "none";

                }
                console.log(cal);
    // set the element's new position:
    document.getElementById('handle').style.left = (ref_pos-1) + "px";
    document.getElementById('fill').style.width = ref_pos + "px";
    } 
    // call a function whenever the cursor moves:
  }

  

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>
<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("handle"));

function dragElement(elmnt) {
    var pos = 0, ref_pos = 0,  cal_pos = 0,pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    
    elmnt.onmousedown = dragMouseDown;
    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
    console.log(elmnt.offsetTop);
        
        pos4 = e.clientX;

    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    var where = Number(document.getElementById('play_or_pause').value);
    playlist = document.getElementsByTagName('audio');
    pos = Number(e.clientX);
    console.log('handle');
    ref_pos = e.clientX+11;
    if(pos >= 0 && pos <= 200){
             var current_time = Math.floor(playlist[where].currentTime);
                var duration = Math.floor(playlist[where].duration);
    // set the element's new position:
    document.getElementById('fill').style.width = pos + "px";
    var cal = ref_pos/200;
    cal = Math.round(cal *360);
    var cal_diff = pos/360;
    console.log('cal3 '+ cal);
    console.log('pos' + pos);
                if(cal >= 9){
                document.getElementById('mus_op').style.width = cal +"px";
                document.getElementById('mus_op').style.display = "inline";

                } else {
                    cal = 0;
                document.getElementById('mus_op').style.width = cal +"px";
                document.getElementById('mus_op').style.display = "none";
                    
                }
    elmnt.style.left = (pos-1) + "px";
    } else {
        document.getElementById('fill').style.width = 200 + "px";
    document.getElementById('mus_op').style.width = 360 + "px";

        elmnt.style.left = 197 + "px";
        return false;
    }
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>
<script>
var count = 0;
function auto_close_control_volume(){
    var vol = document.getElementById('seek_bar_vol');
         if(vol.style.display === 'block' && count > 3){
             vol.style.display = 'none';
             count = 0;
         } else if(count <=3 && vol.style.display==="block"){
            vol.style.display = 'block';
            count++;
         }
    setTimeout(auto_close_control_volume,2000);
}
</script>

<script>
$(document).ready(function(){
    $(window).keyup(function(e){
        switch(e.which){
            case(32):
                    play_or_pause(document.getElementById('play_or_pause').value);
                break;
            case(37):
                    previous_song();
                break;
            case(38):
                    inc_volume();
                break;
            case(39):
                    next_song();
                break;
            case(40):
                    dec_volume();
                break;
            case(82):
                    reset();
                break;
    }
    });
});
</script>
<script>
$(document).ready(function(){
    $(window).keydown(function(e){
        switch(e.which){
            case(70):
                    further_song();
                break;
            case(66):
                    bw_song();
                break;
                case(40):
                    dec_volume();
                break;
                case(38):
                    inc_volume();
                break;
    }
    });
});
</script>
<script>
/* rembobine via la touche b */
function bw_song(){
    var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
        if(playlist[where].currentTime > 10){
            playlist[where].currentTime -= 2;
        }
}
</script>
<script>
/* timelapse */
function further_song(){
    var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
        if(playlist[where].readyState > -1){
            var duration = Math.floor(playlist[where].duration);
            var cur_time = Math.floor(playlist[where].currentTime);
            console.log(cur_time);
        }
        if(playlist[where].currentTime > 1.05){
        playlist[where].currentTime += 0.5;
        console.log(playlist[where].id);
        if(playlist[where].currentTime !== 0 && playlist[where].currentTime >= duration - 3.5){
            where;
            playlist[where].pause();
            playlist[where].currentTime = 0;
            document.getElementById('play_or_pause' + where).src = './img/play.png';
            document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
            document.getElementById('play_or_pause').value = where;
            document.getElementById('play_or_pause').style.backgroundImage = 'url("./img/play.png")';
        }
    }
    }
    

</script>
<script>

    /* Remet la musique en cours à 0
    Peut alternativement servir de touche Play */
   function reset(){
        var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
        playlist[where].currentTime = 0;
        playlist[where].play();
        document.getElementById('play_or_pause' + where).src = './img/pause.png';
            document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
            document.getElementById('play_or_pause').value = where;
            document.getElementById('play_or_pause').style.backgroundImage = "url('./img/pause.png')";
   }
</script>
<script>
   function inc_volume(){
        var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
        playlist[where].volume += 0.05;
        act_vol = playlist[where].volume * 100;
        document.getElementById('fill').style.width = (act_vol+2) + "px";
        document.getElementById('handle').style.left = (act_vol+3) + "px";

   }
</script>
<script>
   function dec_volume(){
        var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
        
        if(playlist[where].volume >= 0.1){
            playlist[where].volume -= 0.05;
        act_vol = playlist[where].volume * 100;
    } else {
        playlist[where].volume = 0;
    act_vol = 0;
    }
    document.getElementById('fill').style.width = (act_vol) + "px";
        document.getElementById('handle').style.left = (act_vol - 2) + "px";
   }
</script>
<script>
   function add_to_playlist(str){
       alert('Musique ajoutée à la playlist '+ str);
       alert.preventDefault();
   }
</script>
<script>
   
   function player(){
        var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
            if(playlist[where].readyState === 4){
             var current_time = Math.floor(playlist[where].currentTime);
                var duration = Math.floor(playlist[where].duration);
                var cal = current_time/duration;
   
            }
            if(!isNaN(current_time)){
                if(current_time === duration - 1){
                    var playlist;
                    var audio;
                    var i;
                    /* On va à l'indice de la prochaine musique dans l'ordre de la playlist afin de 
                    récupérer la source, si la playlist est finie et pas en mode repeat on stoppe */
                    where++;
                    if(where > playlist.length -1){

                        where = playlist.length -1;
                        playlist[where].currentTime = 0;
                        playlist[where].pause();
                        where = 0;
                        document.getElementById('play_or_pause' + where).src = './img/play.png';
                        document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
                        document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
                        document.getElementById('play_or_pause').value = where;
                        document.getElementById('play_or_pause').style.backgroundImage = 'url("./img/play.png")';
                    } else {

                        for(i = 0; i < playlist.length; i++){
                            playlist[i].currentTime = 0;
                            playlist[i].pause();
                            document.getElementById('play_or_pause' + i).src = "./image/play.png";
                        }
                            previous = where -1;
                            playlist[where].volume = playlist[previous].volume;
                            
                            playlist[where].play();
                            document.getElementById('play_or_pause' + where).src = './img/pause.png';
                            document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
                            document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
                            document.getElementById('play_or_pause').value = where;
                            document.getElementById('play_or_pause').style.backgroundImage = 'url("./img/play.png")';

                    }
                }
            } 
                console.log(where);
                console.log(cal);
                console.log('handle');
                var pos_op = Math.round(cal*360);
                var pos_fill = Math.round(cal*200);
                // set the element's new position:
                document.getElementById('fill').style.width = pos_fill + "px";
                            if(cal >= 0.03){
                            document.getElementById('mus_op').style.width = pos_op +"px";
                            document.getElementById('mus_op').style.display = "inline";

                            } else {
                                cal = 0;
                            document.getElementById('mus_op').style.width = pos_op +"px";
                            document.getElementById('mus_op').style.display = "none";
                                
                            }
                document.getElementById('handle').style.left = (pos_fill-1) + "px";
            
            setTimeout(player,300);
    }
</script>
<script>
    function next_song(string){
        console.log(string);
        var where = Number(document.getElementById('play_or_pause').value);
        console.log(where);
            console.log(where);
            var playlist;
            playlist = document.getElementsByTagName('audio');
            /* On va à l'indice de la prochaine musique dans l'ordre de la playlist afin de 
            récupérer la source */
            where++;
            /* Si supérieur on revient au début de la playlist */
            if(where > playlist.length -1){
                console.log(where);
                where = playlist.length -1;
                playlist[where].currentTime = 0;
                playlist[where].pause();
                where = 0;
                previous = playlist.length -1;
                document.getElementById('play_or_pause' + where).src = './img/play.png';
                document.getElementById('play_or_pause' + previous).src = './img/play.png';
                document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
                document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
                document.getElementById('play_or_pause').value = where;
                document.getElementById('play_or_pause').style.backgroundImage = 'url("./img/play.png")';
            } else {
                for(i = 0; i < playlist.length; i++){
                    playlist[i].currentTime = 0;
                    playlist[i].pause();
                    document.getElementById('play_or_pause' + i).src = './img/play.png';
                }
                playlist[where].currentTime = 0;
                previous = where -1;
                playlist[where].volume = playlist[previous].volume;
                playlist[where].play();
                document.getElementById('play_or_pause' + where).src = './img/pause.png';
                document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
                document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
                document.getElementById('play_or_pause').value = where;
                document.getElementById('play_or_pause').style.backgroundImage = "url('./img/pause.png')";
        }
   }
</script>
<script>
   function previous_song(){
            var where = Number(document.getElementById('play_or_pause').value);
            var playlist = document.getElementsByTagName('audio');
            where--;
            if(where < 0){
                where = playlist.length -1;
            }
            for(var i = 0; i < playlist.length; i++){
                playlist[i].pause();
                playlist[i].currentTime = 0;
                document.getElementById('play_or_pause' + i).src = 'url("./img/play.png")';
            }
            var previous = where+1;
            if(where === playlist.length -1){
                previous = 0;
            }

            playlist[where].volume = playlist[previous].volume;
            playlist[where].currentTime = 0;
            playlist[where].play();
            document.getElementById('play_or_pause' + where).src = './img/pause.png';
            document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
            document.getElementById('play_or_pause').value = where;
            document.getElementById('play_or_pause').style.backgroundImage = 'url("./img/pause.png")';
   }
</script>
<script>
 
            var count = 0;
    function play_or_pause(str){
            var i;
            var where = Number(str);
            console.log(where);
            var playlist = document.getElementsByTagName('audio');
            var img = document.getElementById('play_or_pause').style.backgroundImage;
            console.log(img);
        if(document.getElementById('play_or_pause').style.backgroundImage === 'url("./img/play.png")' || document.getElementById('play_or_pause'+ where).src === "./img/play.png"){
            console.log(where);
            for(i = 0; i < playlist.length; i++){
                    if(i !== where){
                        playlist[i].currentTime = 0;
                        playlist[i].pause();
                        document.getElementById('play_or_pause' + i).src = './img/play.png';
                    }
            }
            document.getElementById('play_or_pause' + where).src = './img/pause.png';
            document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
            document.getElementById('play_or_pause').value = where;
            document.getElementById('play_or_pause').style.backgroundImage = "url('./img/pause.png')";
            playlist[where].play();
            count++;
        } else if (document.getElementById('play_or_pause').style.backgroundImage === 'url("./img/pause.png")' || document.getElementById('play_or_pause'+ where).src === './img/pause.png'){
            document.getElementById('play_or_pause' + where).src = './play.png';
            document.getElementById('play_or_pause').style.backgroundImage = 'url("./img/play.png")';
            playlist[where].pause();
            count++;
        }
        if(count <= 1){
            var elmnt = document.getElementById('handle');
            pos = Number(elmnt.offsetLeft);
            pos = pos/100;
            playlist[where].volume = pos;
        }
        if(count > 15){
            document.getElementById('title').textContent = 'Yamete kudasai!!!';
            document.getElementById('cover').src = './img/yamate.jpg';
        }
        
    }
</script>