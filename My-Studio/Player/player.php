<!DOCTYPE HTML>

<html>


<head>

    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./Controllers/Functions/JS/startTime.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>		
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    
    <style>
        
        .main{
            width:300px;
            border-radius:15px;
            height:320px;
            position:fixed;
            bottom:-22%;
            left:9.5%;
            transform: translate(-50%,-50%);
            background-color: #decba4;
        }
        .cover{
            height:180px;
            width:100%;
            border-top-left-radius:15px;
            border-top-right-radius:15px;
            opacity:0.96;
            top:0px;
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
            color :#00223E;
        }
        .controls{
            height:50px;
            width:100%;
            position:relative;
            left:20%;
            padding-top:60px;
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
            bottom:5px;
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
            transform:scale(2);
            bottom:1px;
        }
    </style>
</head>

<body>
    <br><br>
    
    <br><br>
    
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
        fsdsq sqdq s
        padding-bottom:4px;
        padding-bottom:4px;
        padding-bottom:4px;
        padding-bottom:4px;
        padding-bottom:4px;
        padding-bottom:4px;
        padding-bottom:4px;
            <div class="main" id="main">
                <div class="image" id="image">
                    <img src='./img/kake.jpg' class="cover"/>
                </div>
                <div class ="player" id="player">
                    <div class="song_title" id="song_title">Yamete kudasai
                        <div class="current_artist" id="current_artist" style="opacity:0.5">Sid Bee</div>
                        <div class="current_album" id="current_album" style="color:transparent">Waters</div>
                    </div>
                    <div class="controls" id="controls">
                        <button id="pre" class="pre">
                            <img src="./img/pre.png" height="30px" width ="30px"/>
                        </button>
                        <button id="play" class="play">
                            <img src="./img/play.png" height="50px" width="50px"/>
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
            padding-bottom:4px;
            padding-bottom:4px;
            padding-bottom:4px;
            padding-bottom:4px;
            padding-bottom:4px;
</Body>
<script type="text/javascript">




</script>