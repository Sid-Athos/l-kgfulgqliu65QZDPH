<div class="row">

    <div class="col-xs-12">
        <p style="font-size:10px;width:100px"><?php if (isset($successmsg)) { success($successmsg); } ?>
        <?php if (isset($errormsg)) { alert($errormsg); } ?></p>
        
    </div>
</div>
<div class="row">
    <div class="col-xs-6" style="max-height:400px;margin-left:10px;margin-top:-25px;background:background: #085078;">
        <table class="table-scroll table-striped" style="margin-left:15px">
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
    </div>
    <div class="col-xs-6" style="position:absolute;max-height:500px;margin-left:88%;margin-top:-25px">
        <div class="btn-group-vertical">
            <form role="form" action="" method="POST" name="edit">
                <button class="btn btn-primary" style="background:#333333" name="add" value="Ajouter">Ajouter</button>
                <button class="btn btn-primary" style="background:#333333" name="edit">Modifier</button>
                <button class="btn btn-primary" style="background:#333333" name="delete">Supprimer</button>
            </form>
        </div>
    </div>
</div>
</body>
<script>
search();
body_load();
datepicker();
startTime();
initMap();
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8SryylEF5v_C1_pTMszfi0wofkCpxbrE&callback=initMap">
</script>
<script type="text/javascript" src="../Player/Controllers/Functions/JS/img_preview.js"></script>
<script type="text/javascript" src="../Player/Controllers/Functions/JS/search.js"></script>
</html>