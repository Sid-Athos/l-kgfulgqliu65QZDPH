<!DOCTYPE HTML>

<html>


<head>

    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>		
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
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
                        <div class="current_artist" id="current_artist" style="opacity:0.5;color:#FFFFFF">Sid Bee</div>
                        <div class="current_album" id="current_album" style="color:transparent">Waters</div>
                        </div>
                    <div class="controls" id="controls">
                        <button id="pre" class="pre">
                            <img src="./img/pre.png" height="30px" width ="30px"/>
                        </button>
                        <button id="play" class="play" onclick="play_or_pause()">
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
            <form method="POST">
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
            <?php
            if(isset($_POST['song'])){
                echo '<br><br><br><br>b<br>';
                var_dump($_POST);
            }
            ?>
</Body>
<script>
   
        var count = 0;
    function play_or_pause(){
        if(document.getElementById('play_pause').getAttribute('src') == './img/play.png'){
            document.getElementById('play_pause').src = './img/pause.png';
            document.getElementById('title').textContent = 'Yamete kudasai';
            count++;
        } else {
            document.getElementById('play_pause').src = './img/play.png';
            document.getElementById('title').textContent = 'Yamete kudasai';

            count++;
        }
        if(count > 15){
            document.getElementById('TxtHint').textContent = 'Félicitations, tu as violé le bouton play';
            document.getElementById('title').textContent = 'Solar beam';

        }
    }
</script>