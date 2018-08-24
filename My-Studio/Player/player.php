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
            top:63%;
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
        .seek_bar {
            width:120px;
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" title="Perdu? Cliques ici!" data-toggle="modal" data-target="#exampleModal">
  Help!
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
                    </div>
                    <div class="controls">
                        <button id="pre" class="pre"  onclick="previous_song()" style="background-image: url('./img/pre.png');
                        background-size: 30px 30px;background-repeat:no-repeat;
                        height:30px;width:30px;position:absolute;right:200px;top:62px;outline:none;border:none"> </button>
            
                        <button id="play_or_pause" class="play_pause" onclick="play_or_pause(this.value)" style="cursor:pointer;height:50px;width:50px;outline:none;background-color:#C6426E;border:none" value="0">
                            <img src="./img/play.png"  id="play_pause" height="50px" width="50px" style="position:absolute;top:60px;left:25px;z-index:99;"/>
                        </button>
                        <button id="next" class="next" onclick="next_song()" style="height:30px;width:30px;outline:none;background-color:#C6426E;border:none">
                            <img src="./img/next.png" height="30px" width ="30px" style="position:absolute;right:45px;top:71px"/>
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
            <textarea required name="lol"></textarea>
            <input type="submit">
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
            <?php
            if(isset($_POST['song'])){
                echo '<br><br><br><br>b<br>';
                var_dump($_POST);
            }
            ?>
</body>
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
            document.getElementById('play_pause').src = './img/play.png';
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
        document.getElementById('play_pause').src = './img/pause.png';
   }
</script>
<script>
   function inc_volume(){
        var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
        playlist[where].volume += 0.1;
   }
</script>
<script>
   function dec_volume(){
        var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
        playlist[where].volume -= 0.05;
   }
</script>
<script>
   function add_to_playlist(str){
       alert('Musique ajoutée à la playlist '+ str);
       alert.preventDefault();
   }
</script>
<script>
    /* Controle du player sur la page. 
    Notamment le passage automatique des musiques, les images play/pause
    Récupère les idées de la playlist pour avoir l'ensemble des musiques, puis donne en value du lecteur
    l'emplacement de la musique dans la playlist.
    Les listes
    La vie
    Le principe est simple. Quand je récupère une playlist quelconque de la BDD 
    je génène une liste comprenant un bouton play/pause, le chemin audio de la musique et ses informations sous la forme
    audio[i] title[i] album[i] artist[i].
    Selon que j'ai cliqué sur telle ou telle musique, le player recupere son ID et le ferme pour les autres en remettant 
    la durée initiale à 0 secondes et en mettant chaque icone sur PLAY (je récupère l'ensemble des audios grace
    à la propriété document.getElementsByTagName qui me crée une liste contenant tout)
    Puis je mets la musique désirée en marche, en prenant soin de mettre l'image play/pause du lecteur sur pause, ainsi que celle dans
    la playlist (hsebt rani hma3?).
    Si la musique arrive à la fin, j'incrémente l'ID récupéré. Là je double backflip.
    Je le compare à la longueur de la playlist. Si c'est supérieur, l'ID revient à 0, et j'attends que le mec choisisse de relancer
    sinon je lance la musique suivante de la playlist. La propriété duration me permet d'avoir la durée totale en seconde
    la proriété currentTIme... bon on est supposé connaitre l'anglais quand même. */
   function player(){
        var where = Number(document.getElementById('play_or_pause').value);
        playlist = document.getElementsByTagName('audio');
            if(playlist[where].readyState > 0){
             var current_time = Math.floor(playlist[where].currentTime);
                var duration = Math.floor(playlist[where].duration);
                var cal = (current_time/duration)*100;
   
            }
            if(!isNaN(current_time)){
                if(current_time === duration - 1){
                    var playlist;
                    var audio;
                    var i;
                    /* On va à l'indice de la prochaine musique dans l'ordre de la playlist afin de 
                    récupérer la source */
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
                        document.getElementById('play_pause').src = './img/play.png';
                    } else {

                        for(i = 0; i < playlist.length; i++){
                            playlist[i].currentTime = 0;
                            playlist[i].pause();
                            document.getElementById('play_or_pause' + i).src = './img/play.png';
                        }
                            playlist[where].volume = 0.3;
                            playlist[where].play();
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
                    document.getElementById('play_or_pause' + where).src = './img/play.png';
                    document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
                    document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
                    document.getElementById('play_or_pause').value = where;
                document.getElementById('play_pause').src = './img/play.png';
            } else {
                for(i = 0; i < playlist.length; i++){
                    playlist[i].currentTime = 0;
                    playlist[i].pause();
                    document.getElementById('play_or_pause' + i).src = './img/play.png';
                }
                playlist[where].currentTime = 0;
                playlist[where].play();
                document.getElementById('play_pause').src = './img/pause.png';
                document.getElementById('play_or_pause' + where).src = './img/pause.png';
                document.getElementById('title').textContent = document.getElementById('title'+ where).textContent;
                document.getElementById('artist').textContent = document.getElementById('artist'+ where).textContent;
                document.getElementById('play_or_pause').value = where;
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
                document.getElementById('play_or_pause' + i).src = './img/play.png';
            }
            playlist[where].volume = 0.3;
            playlist[where].currentTime = 0;
            playlist[where].play();
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
            var i;
            var where = Number(str);
            var playlist = document.getElementsByTagName('audio');
        if( document.getElementById('play_pause').getAttribute('src') === './img/play.png' || document.getElementById('play_or_pause'+ where).getAttribute('src') == './img/play.png'){
            for(i = 0; i < playlist.length; i++){
                    if(i !== where){
                        playlist[i].currentTime = 0;
                        playlist[i].pause();
                        document.getElementById('play_or_pause' + i).src = './img/play.png';
                    }
            }
            document.getElementById('play_pause').src = './img/pause.png';
            document.getElementById('play_or_pause' + str).src = './img/pause.png';
            document.getElementById('title').textContent = document.getElementById('title'+ str).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ str).textContent;
            document.getElementById('play_or_pause').value = where;
            playlist[where].volume = 0.3;
            playlist[where].play();
            count++;
        } else if (document.getElementById('play_pause').getAttribute('src') === './img/pause.png' ||document.getElementById('play_or_pause'+ where).getAttribute('src') == './img/pause.png'){
            document.getElementById('play_or_pause' + where).src = './img/play.png';
            document.getElementById('play_pause').src = './img/play.png';
            playlist[where].volume = 0.3;
            playlist[where].pause();
            count++;
        }
        if(count > 15){
            document.getElementById('title').textContent = 'Yamete kudasai!!!';
            document.getElementById('cover').src = './img/yamate.jpg';
        }
        
    }
</script>