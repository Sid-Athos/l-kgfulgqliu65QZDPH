<div class="row">
    <div class="col-xs-6" style="max-height:400px;margin-left:10px;margin-top:-25px;background:background:#333333">
        <!--<table class="table-scroll table-striped" style="margin-left:15px">
            <thead>
                <tr class="tr-scroll">
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
        </table>-->
    </div>
    <div class="col-xs-6 msg" style="position:absolute;max-height:500px;right:55px;width:130px;top:margin-top:0px">
        <div class="btn-group-vertical">
            <form role="form" action="" method="POST" name="edit">
                <button class="btn btn-primary" name="add_app" title="Prendre Rendez-Vous" value="Ajouter">Prendre Rendez-vous</button>
                <button class="btn btn-primary" name="delete_app" title="Annuler un Rendez-vous">Annuler</button>
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
