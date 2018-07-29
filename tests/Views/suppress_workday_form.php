
    <div class="row">
        <div class="col-xs-6" style="color:#decba4">
        <h3 class="text-center" style="margin-left:100px">Ajouter un jour de travail</h3>
            <form role="form" style=""class="form container-fluid" action="" method="POST" name="delete_day" >
                <fieldset class="well">
                    <div class="form-group">
                    <label for="name">Choisisez un repos à supprimer</label>
                    </div>
                    <div class="form-group">
                    <?php
    if($work_days){
        for($i=0; $i<count($work_days); $i++){
            echo '<div class="radio"><label><input type="radio" name="optradio" value="'.$work_days[$i]['working_day'].'" required>'.$work_days[$i]['working_day'].'</label></div>';
        }
    }
    ?>  </div>
                    <div class="form-group">
                        <br>   <input type="submit" class="btn btn-block btn-primary space-bottom" style="width:250px; margin-left: 50px;float:center"name="delete_day" value="Supprimer" />
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-xs-6" style="position:absolute;max-height:500px;margin-left:88%;margin-top:-6px;width:145px;color:#decba4">
    <div class="btn-group-vertical">
            <form role="form" action="" method="POST" name="edit">
                <button class="btn btn-primary" style="background:#333333" name="add" value="Ajouter">Ajouter</button>
                <button class="btn btn-primary" style="background:#333333" name="edit">Modifier</button>
                <button class="btn btn-primary" style="background:#333333" name="delete">Supprimer</button>
            </form>
        </div>
        </div>