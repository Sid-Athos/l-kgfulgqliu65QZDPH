<div id="txtHint"></div>
<select class="form-control space-bottom" onchange="getHistory()" id="animal" style="width:40%;display:block;margin-auto;margin-top:80px;margin-left:300px"name="target" required>
<?php 
         foreach($patients_rows as $key0 => $value0){
            unset($value0['history']);
            $name = implode(' ',$value0);
            foreach($value0 as $key =>$value){
                    if($key == 'pet_name'){
                        echo '<option " value="'.$value.'">'.$name.'</option>';
                        echo $value;
                    }
            }
        }
?>
</select><div class ="container">
<center style="color:#decba4">
    Ajouter/modifier un historique :<br> <textarea rows="8" cols="50" id="history" name="history"/><?php if(!empty($patients_rows)){ echo $patients_rows[0]['history'];} ?></textarea><br>
    <input type="hidden" id="owner" name="owner" value="<?php echo $_SESSION['ID'];?>"/>
    <input class = "button " style="margin-left:3%;background:#333333;color:#decba4;border:none" type="button" 
    onclick ='updateHistory(this.value)'name="msg_send" value="Envoyer"></center>
</div>

</body>
<script>
function getHistory(){
    var ajaxRequest;  // The variable that makes Ajax possible!
     try {
         ajaxRequest = new XMLHttpRequest();
     }catch (e) {
         try {
             ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
         }catch (e) {
             try{
                 ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
             }catch (e){
                 alert("Your browser broke!");
                 return false;
             }
         }
     }
    /** Crée la connexion et récupère la réponse */
         
    ajaxRequest.onreadystatechange = function(){
       if(ajaxRequest.readyState == 4){
          var ajaxDisplay = document.getElementById('history');
          ajaxDisplay.innerHTML = ajaxRequest.responseText;
       }
    }
    
 /** Valeurs à passer en arguments */
    var a = document.getElementById('animal').value;
    var o = document.getElementById('owner').value;

    var queryString = "?d=" + a ;
    queryString += "&o=" + o;
    ajaxRequest.open("GET","../tests/Models/get_history.php" + queryString, false);
    
    ajaxRequest.send(); 
 }
</script>
</html>