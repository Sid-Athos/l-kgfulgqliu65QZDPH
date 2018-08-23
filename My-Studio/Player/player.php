<!DOCTYPE HTML>

<html>


<head>

    <meta charset="utf-8">
    
    <style>
    html{
        width:1550px;
    }
        body{
           font-family: 'Raleway', sans-serif;
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
    </style>
    <script>
</script>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  
<body>
<div id="TxtHint" style="top:0">
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
                        <button id="play" class="play" onclick="play_or_pause(this.value)" value="0">
                            <img src="./img/play.png"  id="play_pause" height="50px" width="50px"/>
                        </button>
                        <button id="next" class="next">
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
            <form method="POST" style="display:none">
                <input type="text" name="song[]" value="oui1">
                <input type="text" name="song[]" value="oui1">
                <input type="text" name="song[]" value="oui1">
                <input type="text" name="song[]" value="oui1">
                <input type="text" name="song[]" value="oui1">
                <input type="text" name="song[]" value="oui1">
                <input type="text" name="song[]" value="oui1">
                <input type="text" name="song[]" value="oui1">
                <input type="submit">
            </form>
            
            
            <div class="btn btn-primary dropdown" style="position:absolute;right:0;top:0;width:300px;background-color:#516395;border:none">
    <button class="dropdown-toggle" id="dropdown01" type="button"  
    style="width:300px;color:#FFFFFF;background-color:transparent;border:none;outline:none;color:#decba4;border:0px solid #FFFFFF;" 
    aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">Playlist en cours
    </button>
                <ul class="dropdown-menu"  id="dropdown-menu" style="position:absolute;width:290px;max-height:200px;color:#333333;background-color:transparent;border:none;outline:none;overflow-x:hidden;overflow-y:hidden">
    <div style="position:relative;width:310px;height:210px;overflow:scroll">

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"><p>100</p></div>
                <li id="dd" >
                    <div style="font-size:16px;width:400px;height:25px">
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:-4px;margin-right:4px">
                    </button>
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Waves.mp3' preload ="none" id="audio1" preload="none"></audio>
                    </audio>
                </li>
                <div class="dropdown-divider"></div>
                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">World Domination Feat Chuck Strangers</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"></div>
                <li id="dd" class="dd">
                    <div style="font-size:16px;width:400px;height:25px">
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:-4px;margin-right:4px">
                    </button>
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Waves.mp3' preload ="none" id="audio1" preload="none"></audio>
                    </audio>
                </li>
                <div class="dropdown-divider"></div>
                <li id="dd" class="dd">
                    <div style="font-size:16px;width:400px;height:25px">
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:-4px;margin-right:4px">
                    </button>
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Waves.mp3' preload ="none" id="audio1" preload="none"></audio>
                    </audio>
                </li>
                <div class="dropdown-divider"></div>
                <li id="dd" class="dd">
                    <div style="font-size:16px;width:400px;height:25px">
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:-4px;margin-right:4px">
                    </button>
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Waves.mp3' preload ="none" id="audio1" preload="none"></audio>
                    </audio>
                </li>
                <div class="dropdown-divider"></div>

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:400px;height:25px">
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:-4px;margin-right:4px">
                    </button>
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Waves.mp3' preload ="none" id="audio1" preload="none"></audio>
                    </audio>
                </li>
                <div class="dropdown-divider"></div>

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"></div>

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"></div>

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"></div>

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"></div>

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
                <div class="dropdown-divider"></div>

                <li id="dd" class="dd">
                    <div style="font-size:16px;width:350px;height:25px;margin-left:0px">
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:30px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:-4px;margin-right:4px">
                    </button></a>
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span>
                    </div>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio>
                </li>
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
</Body>
<script>
</script>

<script>
    function check(){
        alert(document.getElementById('play').value);
    }
   function add_to_playlist(str){
       alert('Musique ajoutée à la playlist '+ str);
       alert.preventDefault();
   }
 
            var where_music = document.getElementById('play').value;

            function where(where_music){
                var lol = document.getElementById('play').value;
                console.log(lol);
                return where;
            }

            var count = 0;
    function play_or_pause(str){
            var where = str;
            console.log(where);
            var current_music = "audio" + where;
        if( document.getElementById('play').getAttribute('src') === './img/play.png' || document.getElementById('play_pause'+ where).getAttribute('src') == './img/play.png'){
            document.getElementById('play_pause').src = './img/pause.png';
            document.getElementById('play_pause' + str).src = './img/pause.png';
            for(var i = 0; i < document.getElementsByTagName('audio').src; i++){
                    audio = $('#audio' + String(i));
                    console.log(audio);
                    audio[i].pause();
                    document.getElementById('play_pause' + String(i)).src = './img/play.png';
            }
            document.getElementById('title').textContent = document.getElementById('title'+ str).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ str).textContent;
            document.getElementById('play').value = where;
            audio = $('#'+ current_music);
            playlist = $('#playlist');
            tracks = playlist.find('audio');
            len = tracks.length - 1;
            audio[0].volume = 0.3;
            audio[0].play();
            count++;
        } else if (document.getElementById('play_pause'+ where).getAttribute('src') == './img/pause.png'){
            document.getElementById('play_pause').src = './img/play.png';
            for(var i = 0; i < document.getElementsById('audio'); i++){
                console.log(0);
                    audio = $('#audio' + String(i));
                    console.log(audio);
                    audio[i].pause();
                    document.getElementById('play_pause' + String(i)).src = './img/play.png';
            }
            document.getElementById('play_pause').value = where;
            document.getElementById('title').textContent = document.getElementById('title'+ str).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ str).textContent;
            document.getElementById('play').value = where;
            audio = $('#'+ current_music);
            playlist = $('#playlist');
            tracks = playlist.find('audio');
            tracks = playlist.find('audio');
            len = tracks.length - 1;
            audio[0].volume = 0.3;
            audio[0].pause();
            count++;
        }
        var duration;
            audio[0].onloadedmetadata = function(duration) {
                var duration = audio[0].duration;
        document.getElementById('TxtHint').textContent = where + str + len + tracks[0] + duration;
                return duration;
            }
        if(count > 15){
            document.getElementById('TxtHint').textContent = 'Félicitations, tu as violé le bouton play';
            document.getElementById('title').textContent = 'Yamete kudasai!!!';
            document.getElementById('cover').src = './img/yamate.jpg';
        }
    }
    function previous_song(){
        document.getElementById('TxtHint').textContent = 'Félicitations, tu as violé le bouton play';
        where--;
        var current_music = 'audio'+ where;
        audio = $('#'+ current_music);
        playlist = $('#playlist');
        tracks = playlist.find('li audio');
        len = tracks.length - 1;
        audio[0].volume = 0.3;
        audio[0].play();
        count++;
    }


</script>