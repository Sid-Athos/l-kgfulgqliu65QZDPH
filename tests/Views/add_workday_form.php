
<div class="container-fluid" style="margin-top: 40px;">
    <?php if(isset($successmsg)) success($successmsg); ?>
 </div>
            <table class="table-scroll table-striped">
                <thead>
                    <tr class='tr-scroll'>
                        <th>Jour(s)</th>
                        <th>Heure de début</th>
                        <th>Heure de fin</th>
                    </tr>
                </thead>
                <tbody class="tbody-scroll">
                    <?php
                    if($work_rows){
                        foreach($work_rows as $key0 => $value0){
                            foreach($value0 as $key => $value){
                                if($key == "working_day"){
                                    echo "<tr class='tr-scroll'><td>{$value}</td>";
                                } else if($key == "to_time"){
                                    echo "<td>{$value}</td></tr>";
                                } else{
                                    echo "<td>{$value}</td>";
                                }
                            }
                        }
                    }
                ?>
                </tbody>
            </table>

<div class="container-fluid" style="float:right; display: block; margin-top:-1%; width: 250px">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form role="form" class="form container-fluid border border-dark rounded" action="" method="POST" name="edit">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="btn-group-vertical">
                            <button class="btn btn-primary" name="add" value="Ajouter">Ajouter</button>
                            <button class="btn btn-primary" name="edit">Modifier</button>
                            <button class="btn btn-primary" name="delete">Supprimer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br/>