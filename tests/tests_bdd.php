<!DOCTYPE html>

<html>


<head>

    <meta charset="utf-8">
    
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<bory>
<form id="test">
<input type="text" id="name" required name="name"/>
<input type="text" id="pute" required name="pute"/>
<button id="send">dsqdsqudigqsiu</button>
</form>
<div id="txthint"></div>
</body>
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

