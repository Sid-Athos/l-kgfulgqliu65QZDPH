<!DOCTYPE html>

<html>


<head>

    <meta charset="utf-8">
    
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body onload="count()">
<form id="test">
<input type="text" id="name" required name="name"/>
<input type="password" id="pute" required name="pute"/>
<button id="send">dsqdsqudigqsiu</button>
</form>
<div id="txthint"></div>
<?php
$check = 122321;
$check_pal = intval(strrev(strval($check)));
if($check_pal === $check){
    echo 'gagné';
}
foreach(range(0,12,1)as $key){
    echo '<audio class="audio" id="audio[]" style="display:hidden;position:absolute" name="audio1"></audio>';
}

echo $check;
?>
<div id="cunt"></div>
<?php
    $i = 2.7899;
    $i1 = 3.896986;
    $i2 = 5.7899;
    $i3 = 3.896986;
    $cal = abs($i - $i1);
    $cal1 = abs($i3 - $i2);
    if($cal > $cal1){
        echo 'cal est p';
    } else {
        echo 'cal1 est p';
    }
    if(isset($_POST)){
        var_dump($_POST);
        echo'lol';
    }
?>
</body>
<script>
    function count(){
        var count = document.getElementsByTagName('audio');
        document.getElementById('cunt').textContent = count.length;
    }
</script>
<script>

$("#test").submit(function(e){
    e.preventDefault();
    $.ajax({
        type:"POST",
        url: "check_form.php",
        data: {"name" : $("#name").val(), "pute" : $("#pute").val()},
        success: function(result){
            document.getElementById('txthint').textContent = result;
        }
    })
})
</script>

