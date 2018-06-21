<?php var_dump($contacts_rows); ?>
<form action="" method="POST" name="send_msg" value="check">
<select class="form-control space-bottom" style="width: 30%; position:center; margin-left: 35%;"name="target" required>
<?php 
    foreach($contacts_rows as $key0 => $value0){
        $name = implode(' ',$value0);
        foreach($value0 as $key =>$value){
            if($key == 'email'){
                echo '<option value="'.$value.'">'.$name.'</option>';
            }
        }
    }
?>
</select><div class ="container">
<center>
    Saisissez le message à envoyer :<br> <textarea rows="8" cols="50" name="content" value =""></textarea><br>
    <input class = "button " style="margin-left:10%;" type="submit" name="msg_send" value="Envoyer"></center>
</div>
</form>