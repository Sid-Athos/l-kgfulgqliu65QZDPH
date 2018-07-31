<div class="row">
<div class="col-xs-6" style="margin-left:15px;color:#decba4;margin-top:80px;height:110;margin-bottom:50px">
<?php
echo'
<caption><center>Vos animaux :</center></caption>
<table class="table-scroll table-striped"><thead><tr><th>Nom : </th><th>Espèce :</th><th>Couleur du pelage : </th><th> Sexe:</th><th> Date de naissance :</th><th> Puce :</th><th style="width:350px">Historique :</th></tr></thead>
<tbody>';
        foreach($patients_rows as $key0 => $value0){
            foreach($value0 as $key => $value){
                if($key == "pet_name"){
                    echo "<tr><td>{$value}</td>";
                } else if($key =="history"){
                    echo "<td>{$value}</td></tr>";
                } else{
                    echo "<td>{$value}</td>";
                }
            }
        }
echo '</tbody></table>';
?>
</div>
<div class ="col-xs-6 msg" style="position:fixed;right:1px;top:43px">
<div class="btn-group-vertical" style="top:90">
            <form role="form" action="" method="POST" name="history" style="width:190px">
                <button class="btn btn-primary" name="add_history" title="Ajouter ou modifier un historique"value="hist">Editer historique</button>
            </form>
        </div>
</div>
</div>