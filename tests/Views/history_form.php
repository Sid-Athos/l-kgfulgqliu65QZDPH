<div id="txtHint"></div>
<select class="form-control space-bottom" id="animal" style="width: 60%; position:center; margin-left: 19.5%;"name="target" required>
<?php 
         foreach($patients_rows as $key0 => $value0){
            $name = implode(' ',$value0);
            foreach($value0 as $key =>$value){
                    if($key == 'pet_name'){
                        echo '<option " value="'.$value.'">'.$name.'</option>';
                    }
            }
        }
?>
</select><div class ="container">
<center style="color:#decba4">
    Ajouter un historique :<br> <textarea rows="8" cols="50" id="history" name="content" value =""></textarea><br>
    <input type="hidden" id="owner" name="owner" value="<?php echo $_SESSION['ID'];?>"/>
    <input class = "button " style="margin-left:3%;background:#333333;color:#decba4;border:none" type="button" onclick ='updateHistory(this.value)'name="msg_send" value="Envoyer"></center>
</div>

</body>
</html>