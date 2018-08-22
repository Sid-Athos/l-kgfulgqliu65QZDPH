<!DOCTYPE HTML>

<html>


<head>

    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstRapcdn.com/bootstRap/4.1.2/js/bootstRap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>		
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstRapcdn.com/bootstRap/4.1.2/css/bootstRap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script type="text/javascript" src="./Controllers/Functions/JS/play_pause.js"></script>
    <script type="text/CSS" src="./Views/CSS/stylesheet.css"></script>
    <style>
        
        .main{
            width:300px;
            border-radius:15px;
            border-bottom-left-radius:0px;
            border-bottom-right-radius:0px;
            height:335px;
            position:fixed;
            bottom:-22%;
            left:9%;
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
</head>

<body>
<br>
<br>
<div id="TxtHint">
</div>
            <div class="main" id="main">
                <div class="image" id="image">
                    <img src='./img/kake.jpg' id="cover" class="cover"/>
                </div>
                <div class ="player" id="player">
                    <div id="song_title" class="song_title">
                        <div class="title" id="title">
                        </div>
                        <div class="current_artist" id="artist" style="opacity:0.5;color:#FFFFFF">Sid Bee
                        </div>
                        <div class="current_album" id="current_album" style="color:transparent">Waters
                        </div>
                    </div>
                    <div class="controls" id="controls">
                        <button id="pre" class="pre" onclick="previous_song()">
                            <img src="./img/pre.png" height="30px" width ="30px"/>
                        </button>
                        <button id="play" class="play" onclick="play_or_pause(this.value)" value="0">
                            <img src="./img/play.png"  id="play_pause" height="50px" width="50px"/>
                        </button>
                        <button id="next" class="next">
                            <img src="./img/next.png" height="30px" width ="30px"/>
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
            <div style="overflow:hidden;position:absolute;right:0;bottom:0">
            <ul id="playlist" >
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
                <li>
                    <audio src='./musics/Summer_Knights.mp3' preload ="none" id="audio0" preload="none"></audio></li>
                    </audio>
                    <button onclick="play_or_pause(this.value)" value="0" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause0" style="margin-bottom:3px;margin-right:4px">
                    <span id="title0">Summer Knights</span> - <span id="artist0">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                <li>
                    <button onclick="play_or_pause(this.value)" value="1" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause1" style="margin-bottom:3px;margin-right:4px">
                    <span id="title1">Waves</span> - <span id="artist1">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                    
                </li>
                <li>
                    <audio src='./musics/World Domination.mp3' preload ="none" id="audio2" preload="none">
                    </audio>               
                    <button onclick="play_or_pause(this.value)" value="2" style="background:transparent;border:none;width:290px;text-align:left">
                    <img src="./img/play.png" height="20px" width="20px" id="play_pause2" style="margin-bottom:3px;margin-right:4px">
                    <span id="title2">World Domination</span> - <span id="artist2">Joey Bad4$$</span></button>
                    <select style="height:25px">
                        <option  value="Ajouter à une playlist">Ajouter à une playlist</option>
                        <option onclick="add_to_playlist(this.value)" value="Rap">Rap</option>
                        <option onclick="add_to_playlist(this.value)" value="Everyday">Everyday</option>
                        <option onclick="add_to_playlist(this.value)" value="Sport">Sport</option>
                        <option onclick="add_to_playlist(this.value)" value="Chill">Chill</option>
                    </select>
                </li>
            </ul>
            </div>
        


            <?php
            if(isset($_POST['song'])){
                echo '<br><br><br><br>b<br>';
                var_dump($_POST);
            }
            ?>
</Body>


<script>
   function add_to_playlist(str){
       alert('Musique ajoutée à la playlist '+ str);
       alert.preventDefault();
   }
   var count = 0;
    function play_or_pause(str){
        var where = Number(str);
        if(document.getElementById('play_pause').getAttribute('src') == './img/play.png'){
            document.getElementById('play_pause').src = './img/pause.png';
            document.getElementById('play_pause' + str).src = './img/pause.png';
            document.getElementById('title').textContent = document.getElementById('title'+ str).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ str).textContent;
            document.getElementById('play').value = where;
            var current_music = "audio" + str;
            audio = $('#'+ current_music);
            playlist = $('#playlist');
            tracks = playlist.find('li button');
            len = tracks.length - 1;
            audio[0].volume = 0.3;
            audio[0].play();
            count++;
        } else {
            document.getElementById('play_pause').src = './img/play.png';
            document.getElementById('play_pause' + str).src = './img/play.png';
            document.getElementById('play_pause').value = where;
            document.getElementById('title').textContent = document.getElementById('title'+ str).textContent;
            document.getElementById('artist').textContent = document.getElementById('artist'+ str).textContent;
            document.getElementById('play').value = where;
            var current_music = "audio" + str;
            audio = $('#'+ current_music);
            playlist = $('#playlist');
            tracks = playlist.find('li button');
            len = tracks.length - 1;
            audio[0].volume = 0.3;
            audio[0].pause();
            count++;
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
        tracks = playlist.find('li a');
        len = tracks.length - 1;
        audio[0].volume = 0.3;
        audio[0].play();
        count++;
    }
</script>
<script>
    $(document).ready(function () {
var audio;
var playlist;
var tracks;
var current;

init();
function init() {
    current = 0;
    audio = $('#audio1');
    playlist = $('#playlist');
    tracks = playlist.find('li button');
    len = tracks.length - 1;
    audio[0].volume = 0.3;
    playlist.find('a').click(function (e) {
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended', function (e) {
        current++;
        if (current == len+1) { 
            current = 0;
            link = playlist.find('button')[0];
        } else {
            link = playlist.find('button')[current];
        }
        run($(link), audio[0]);
    });
}

})

</script>