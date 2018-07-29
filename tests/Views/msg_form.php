<div id="txtHint"></div>
<select class="form-control space-bottom" style="width: 20%; position:center; margin-left: 37.5%;"name="target" required>
<?php 
    foreach($contacts_rows as $key0 => $value0){
        $name = implode(' ',$value0);
        foreach($value0 as $key =>$value){
            if($key == 'email'){
                echo '<option id="send_to" value="'.$value.'">'.$name.'</option>';
            }
        }
    }
?>
</select><div class ="container">
<center>
    Saisissez le message à envoyer :<br> <textarea rows="8" cols="50" id="msg" name="content" value =""></textarea><br>
    <input type="hidden" id="exp" name="sender" value="<?php echo $_SESSION['ID'];?>"/>
    <input class = "button " style="margin-left:3%;" type="button" onclick = 'ajaxFunction()'name="msg_send" value="Envoyer"></center>
</div>

<script>
     //Browser Support Code
     function ajaxFunction(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('txtHint');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var d = document.getElementById('send_to').value;
               var e = document.getElementById('exp').value;
               var msg = document.getElementById('msg').value;
               var queryString = "?d=" + d ;
            
               queryString +=  "&e=" + e + "&msg=" + msg;
               ajaxRequest.open("GET", "../tests/Models/insert_message.php" + queryString, true);
               ajaxRequest.send(null); 
            }
         //-->
</script>