<div id="txtHint"></div>

<select class="form-control space-bottom" onclick="getHistory()" id="animal" style="width:40%;display:block;margin-auto;margin-top:70px;margin-left:300px"name="target" required>
<?php 
         foreach($app_rows as $key0 => $value0){
            unset($value0['history'],$value0['canceled']);
            $name = implode(' ',$value0);
            foreach($value0 as $key =>$value){
                    if($key == 'pet_name'){
                        echo '<option value="'.$name.'">'.$name.'</option>';
                    }
            }
        }
?>
</select><div class ="container">
<form action="#">
<center style="color:#decba4">
    Ajouter/modifier un historique :<br> <pre><textarea rows="8" cols="50" id="history" minlength="5" required name="history"/><?php if(!empty($patients_rows)){ printf($patients_rows[0]['history']);} ?></textarea></pre><br>
    Raisons de la consultation :<br> <pre><textarea type="text" rows="3" minlength="5" cols="50" id="reason" required name="reason"/></textarea></pre>
    Examens :<br> <pre><textarea rows="8" cols="50" id="exams" required minlength="5" name="exams"/></textarea></pre>
    Diagnostic :<br> <pre><textarea rows="2" cols="50" id="diagnosis" minlength="5" required name="diagnosis"/></textarea></pre>
    Traitement :<br> <pre><textarea rows="2" cols="50" id="treatment" minlength="5" required name="treatment"/></textarea></pre>
    Notes :<br> <pre><textarea rows="2" cols="50" id="notes" required minlength="5" name="notes"/></textarea></pre>
    Poids : <br> <pre><input type="number" id="weight" style="width:45px" required name ="weight" min="0" max="500" step="0.1"/>
    Salle de consultation numéro : <br> <pre><input type="number" required id="room" style="width:45px" name ="room" min="1" max="6" step="1"/>
    <input type="hidden" id="owner" name="owner" value="<?php echo $_SESSION['ID'];?>"/>
    <input class = "button " style="margin-left:3%;background:#333333;color:#decba4;border:none" type="submit" 
    onclick ='insertConsultation(this.value)'name="msg_send" value="Envoyer"></center>
    </form>
</div>


</body>
</html>