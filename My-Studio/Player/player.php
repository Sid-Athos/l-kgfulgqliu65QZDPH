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
            width:300px;
            border-radius:15px;
            border-bottom-left-radius:0px;
            border-bottom-right-radius:0px;
            height:335px;
            position:absolute;
            bottom:-168px;
            left:150px;
            transform: translate(-50%,-50%);
            background-color: #C6426E;
            z-index:99;
        }
        .cover{
            height:180px;
            width:100%;
            border-top-left-radius:15px;
            border-top-right-radius:15px;
            opacity:0.96;
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
            top:69%;
            padding-top:8px;
            left:50%;
            transform: translate(-50%,-50%);
            color :#FFFFFF;
        }
        .controls{
            height:50px;
            width:100%;
            position:relative;
            left:20%;
            padding-top:60px;
            z-index:6;
        }
        .play{
            border:0;
            background-color: transparent;
            cursor: pointer;
            outline:none;
        }
        .pre{
            border:0;
            cursor: pointer;
            background-color: transparent;
        }
        .next{
            border:0;
            cursor: pointer;
            background-color: transparent;
        }
        .seek_bar {
            width:190px;
            height:6px;
            background-color: gray;
            display:flex;
            position:absolute;
            bottom:15px;
            left:20%;
            cursor: pointer;
        }
        .fill{
            height:6px;
            background-color:#FFFFFF;
            border-radius:20px;
        }
        .handle{
            width:8px;
            height:8px;
            background-color:#FFFFFF;
            border-radius:50%;
            margin-left:-5px;
            position:absolute;
            transform:scale(1.9);
            bottom:0.1px;
        }
        .overlay {
            position: absolute;
            bottom: 100%;
            left: 0;
            right: 0;
            background-image: url('./img/kake.jpg');
            background-repeat: no-repeat;
            overflow: hidden;
            width: 100%;
            height:0;
            transition: .5s ease;
        }

        .image:hover .overlay {
            height: 100%;
        }
        .image:hover .cover{
            height:360px;
            z-index:5;
            background:transparent;
            opacity:0.8;
        }
        .image:hover.main{
            background-color:transparent;
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
            right:0;
            bottom:0;
            background-color:#c31432;
            opacity:1.2;
            border:none;
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
        .dropdown-toggle{
            width:300px;
            color:#FFFFFF;
            margin-top:-10px;
            background-color:transparent;
            border:none;
            outline:none;
            color:#decba4;"
        }
    </style>
  
<body onload="player()">
<div id="TxtHint" style="top:0">
</div>
var regex1 = RegExp('foo*');
var regex3 = RegExp('^[a-z]+@{1}[a-z]{2,}\.[a-z]{2,4}$');
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" title="Perdu? Cliques ici!" data-toggle="modal" data-target="#exampleModal">
  Help!
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;margin-left:280px"><center>Astuces</center></h5>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="">X</button>
      </div>
           
      <div class="modal-body">
        Utilisez les touches directionnelles pour contrôler le player!
        La flèche droite lance la prochaine musique, la flèche gauche joue la précèdente.
        La touche espace est un accès rapide pour les fonctions play/pause.  
        Have Fun!

        En cas de soucis supplémentaire, veuillez utiliser le formulaire de contact pour nous faire part de votre problème.
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
            <div class="main" id="main">
                <div class="image" id="image">
                    <img src='./img/kake.jpg' id="cover" class="cover"/>
                </div>
                <div class ="player" id="player">
                    <div id="song_title" class="song_title">
                        <div class="title" id="title">
                        Créé par
                        </div>
                        <div class="current_artist" id="artist" style="opacity:0.5;color:#FFFFFF">Sid Bee
                        </div>
                        <div class="current_album" id="current_album" style="color:transparent">Waters
                        </div>
                    </div>
                    <div class="controls" id="controls">
                        <button id="pre" class="pre" onclick="previous_song()" style="bottom:15px">
                            <img src="./img/pre.png" height="30px" width ="30px" style="padding-bottom:10px"/>
                        </button>
                        <button id="play_or_pause" class="play_pause" onclick="play_or_pause(this.value)" style="background-color:transparent;border:none" value="0">
                            <img src="./img/play.png"  id="play_pause" height="50px" width="50px"/>
                        </button>
                        <button id="next" class="next" onclick="next_song()">
                            <img src="./img/next.png" height="30px" width ="30px" style="padding-bottom:10px"/>
                        </button>
                    </div>
                    <div id="seek_bar" class="seek_bar">
                        <div id="fill" class="fill">
                        </div>
                        <div class ="handle" id="handle">
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="btn btn-primary dropdown" title="playlist en cours de lecture">
    <button class="dropdown-toggle" id="dropdown01" type="button"  
    aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">Playlist en cours
    </button>
    <div style="position:absolute;top:0;right:285px">
                <ul class="dropdown-menu"  id="dropdown-menu" style="position:absolute;margin-top:Opx;width:290px;margin-left:20px;max-height:200px;color:#333333;background-color:#FFFFFF;border:none;outline:none;overflow-x:hidden;overflow-y:hidden">
    <div style="position:relative;width:307px;height:210px;overflow:scroll">

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" id="play_pause0" value="0" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_or_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"><p>100</p></div>
                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" id="play_pause1" value="1" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_or_pause1" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span> dsqdjsq vdjv dvsqk vdkl dsqd dsq dd sqd dsq dsd qs
                    </div>
                    <audio src='./musics/Waves.mp3' preload ="none" id="audio1" preload="none"></audio>
                </li>
                <div class="dropdown-divider"><p>100</p></div>
                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" id="play_pause2" value="2" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_or_pause2" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none"></audio>
                </li>
                <div class="dropdown-divider"><p>100</p></div>
            </ul>
            </div>
            </div>
            <div id="lol"></div>
       <!--    <select style="height:25px;position:absolute;right:20px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select> -->
            <?php
            if(isset($_POST['song'])){
                echo '<br><br><br><br>b<br>';
                var_dump($_POST);
            }
            ?>
</body>
<script>
$(document).ready(function(){
    $(document).keyup(function(e){
        if(e.keyCode == 39){
            next_song();
        } else if(e.keyCode == 37) {
            previous_song();
        } 
        if(e.which == 32){
            play_or_pause(document.getElementById('play_or_pause').value);
        }
    });
});
</script>
<script>
   function add_to_playlist(str){
       alert('Musique ajoutée à la playlist '+ str);
       alert.preventDefault();
   }
</script>
<script>
   function player(){
            var where = document.getElementById('play_or_pause').value;
            current_music = 'audio'+ where;
            audio = $('#'+ current_music);
            if(audio[0].readyState > 0){
                var current_time = Math.floor(audio[0].currentTime);
                var duration = Math.floor(audio[0].duration);
                var cal = (current_time/duration)*100;

            }
            console.log(where);
            if(!isNaN(current_time)){
                if(current_time === duration - 1){
                    var playlist;
                    var audio;
                    var i;
                    where = Number(where);
                    playlist = document.getElementsByTagName('audio');
                    /* On va à l'indice de la prochaine musique dans l'ordre de la playlist afin de 
                    récupérer la source */
                    where++;
                    if(where > playlist.length -1){
                        console.log('pute');
                        where = playlist.length -1;
                        audio[0].currentTime = 0;
                        audio[0].pause();
                        document.getElementById('play_pause').src = './img/play.png';
                    } else {

                        for(i = 0; i < playlist.length; i++){
                                i = String(i);
                                    all_musics = 'audio' + i;
                                    audio = $('#'+ all_musics);
                                    audio[0].currentTime = 0;
                                    audio[0].pause();
                                    document.getElementById('play_or_pause' + i).src = './img/play.png';
                        }
                            where = String(where);
                            current_music = 'audio'+ where;
                            audio = $('#'+ current_music);
                            audio[0].volume = 0.3;
                            audio[0].play();
                            document.getElementById('play_or_pause' + where).src = './img/pause.png';
                            document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
                            document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
                            document.getElementById('play_or_pause').value = where;
                    }
                }
            }
        setTimeout(player,1000);
    }
</script>
<script>
    function next_song(){
            var where = document.getElementById('play_or_pause').value;
            var current_music;
            var playlist;
            var audio;
            var i;
            where = Number(where);
            playlist = document.getElementsByTagName('audio');
            /* On va à l'indice de la prochaine musique dans l'ordre de la playlist afin de 
            récupérer la source */
            where++;
            if(where > playlist.length -1){
                where = 0;
            }

            for(i = 0; i < playlist.length; i++){
                    i = String(i);
                        all_musics = 'audio' + i;
                        audio = $('#'+ all_musics);
                        audio[0].currentTime = 0;
                        audio[0].pause();
                        document.getElementById('play_or_pause' + i).src = './img/play.png';
            }
            where = String(where);
            current_music = 'audio'+ where;
            audio = $('#'+ current_music);
            audio[0].volume = 0.3;
            audio[0].currentTime = 0;
            audio[0].play();
            document.getElementById('play_pause').src = './img/pause.png';
            document.getElementById('play_or_pause' + where).src = './img/pause.png';
            document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
            document.getElementById('play_or_pause').value = where;
   }
</script>
<script>
   function previous_song(){
            var where = document.getElementById('play_or_pause').value;
            where = Number(where);
            var playlist = document.getElementsByTagName('audio');
            where--;
            if(where < 0){
                where = playlist.length -1;
            }
            var audio;
            for(var i = 0; i < playlist.length; i++){
                    i = String(i);
                        all_musics = 'audio' + i;
                        audio = $('#'+ all_musics);
                        audio[0].currentTime = 0;
                        audio[0].pause();
                        document.getElementById('play_or_pause' + i).src = './img/play.png';
            }
            where = String(where);
            var current_music = 'audio'+ where;
            audio = $('#'+ current_music);
            audio[0].volume = 0.3;
            audio[0].currentTime = 0;
            audio[0].play();
            document.getElementById('play_pause').src = './img/pause.png';
            document.getElementById('play_or_pause' + where).src = './img/pause.png';
            document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
            document.getElementById('play_or_pause').value = where;
   }
</script>
<script>
 
            var count = 0;
    function play_or_pause(str){
        
            var where = str;
            console.log(where);
            var current_music = "audio" + where;
            var all_musics;
            var playlist = document.getElementsByTagName('audio');
            console.log(playlist);
        if( document.getElementById('play_pause').getAttribute('src') === './img/play.png' || document.getElementById('play_or_pause'+ where).getAttribute('src') == './img/play.png'){
            for(var i = 0; i < playlist.length; i++){
                    i = String(i);
                    if(i !== where){
                        all_musics = 'audio' + i;
                        audio = $('#'+ all_musics);
                        audio[0].currentTime = 0;
                        audio[0].pause();
                        document.getElementById('play_or_pause' + i).src = './img/play.png';
                    }
            }
            document.getElementById('play_pause').src = './img/pause.png';
            document.getElementById('play_or_pause' + str).src = './img/pause.png';
            document.getElementById('title').textContent = document.getElementById('title'+ str).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ str).textContent;
            document.getElementById('play_or_pause').value = where;
            audio = $('#'+ current_music);
            playlist = $('#playlist');
            tracks = playlist.find('audio');
            len = tracks.length - 1;
            audio[0].volume = 0.3;
            audio[0].play();
            count++;
        } else if (document.getElementById('play_pause').getAttribute('src') === './img/pause.png' ||document.getElementById('play_or_pause'+ where).getAttribute('src') == './img/pause.png'){
            document.getElementById('play_or_pause' + where).src = './img/play.png';
            
            document.getElementById('play_pause').src = './img/play.png';
            audio = $('#'+ current_music);
            playlist = $('#playlist');
            tracks = playlist.find('audio');
            len = tracks.length - 1;
            audio[0].volume = 0.3;
            audio[0].pause();
            count++;
        }
        var duration;
       var  time = audio[0].duration; 
            duration = audio[0].onloadedmetadata = function check(duration) {
                var duration = audio[0].duration;
                var current = audio[0].currentTime;
                return audio[0].duration;
            }
        if(count > 15){
            document.getElementById('title').textContent = 'Yamete kudasai!!!';
            document.getElementById('cover').src = './img/yamate.jpg';
        }
        
    }
</script>