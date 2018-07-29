<div class="row">
<div class="col-xs-6" style="margin-left:15px;color:#decba4">
<?php
echo'
<caption><center> Messages envoyés: </center></caption>
<table><thead><tr><th>Envoyé à : </th><th>Date : </th><th> Contenu :</th></tr></thead>
<tbody>';
        foreach($outbox_rows as $key0 => $value0){
            foreach($value0 as $key => $value){
                if($key == "sent_to"){
                    echo "<tr><td>{$value}</td>";
                } else if($key =="content"){
                    echo "<td>{$value}</td></tr>";
                } else{
                    echo "<td>{$value}</td>";
                }
            }
        }
echo '</tbody></table>';
?>
</div>
<div class ="col-xs-6" style="position:absolute;right:0">
<div class="btn-group-vertical">
            <form role="form" action="" method="POST" name="edit" style="width:150px">
                <button class="btn btn-primary" style="background:#333333" name="msg" value="convos">Conversations</button>
                <button class="btn btn-primary" style="background:#333333" name="msg" value="outbox">Envoyés</button>
                <button class="btn btn-primary" style="background:#333333" name="msg" value="write">Ecrire</button>
            </form>
        </div>
</div>
</div>