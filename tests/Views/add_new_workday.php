
<div class="container-fluid" style="color:#decba4">
    <h3 class="text-center">Ajouter un jour de travail</h3>
    <div class="row">
        <div class="col-xs-6" style="color:#decba4; text-align:center; vertical-align:bottom">
            <form role="form" class="form container-fluid" action="" method="POST" name="add_day">
                <fieldset class="well">
                    <div class="form-group">
                    <label for="name">Selectionnez un jour</label>
                        <select class="form-control" style="width:120px;margin-left:36%" name="days_add" required>
                    <?php   for($i = 0; $i< count($days_available);$i++){
                                echo '<option value ="'.$days_available[$i].'">'.$days_available[$i].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="input-group space-bottom">
                        <span class="input-group-addon" style"padding:-5px">De:</span>
                        <input type="number" class="form-control" min="08" max="19" step="1" name="from_hour" required/>
                        <span class="input-group-addon" style="border-left: 0; border-right: 0;">H</span>
                        <input type="number" class="form-control" value="0" min="0" max="30" step="30" name="from_min" required/>
                        <span class="input-group-addon" style="border-left: 0; border-right: 0;">min</span>
                    </div>
                    <div class="input-group space-bottom">
                        <span class="input-group-addon"> Á  :</span>
                        <input type="number" class="form-control" min="08" max="19" step="1" name="to_hour" required/>
                        <span class="input-group-addon" style="border-left: 0; border-right: 0; height:10px">H</span>
                        <input type="number" class="form-control" value="0" min="0" max="30" step="30" name="to_min" required/>
                        <span class="input-group-addon" style="border-left: 0; border-right: 0;">min</span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary space-bottom" name="add_day" value="Ajouter" />
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="col-xs-6" style="position:absolute;max-height:500px;margin-left:85%;margin-top:-231px;width:145px;">
    <div class="btn-group-vertical">
            <form role="form" action="" method="POST" name="edit">
                <button class="btn btn-primary" style="background:#333333" name="add" value="Ajouter">Ajouter</button>
                <button class="btn btn-primary" style="background:#333333" name="edit">Modifier</button>
                <button class="btn btn-primary" style="background:#333333" name="delete">Supprimer</button>
            </form>
        </div>
</div>

<body>
<style>
 input{
     height:30px;
 }