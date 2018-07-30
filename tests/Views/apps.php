<div class="row">
    <div class="col-xs-6" style="max-height:400px;margin-left:10px;margin-top:-25px;background:background:#333333" id="txtHint">
        <table class="table-scroll table-striped" style="margin-left:15px;margin-top:35px">
            <thead>
                <tr class="tr-scroll">
                    <th>Heure</th>
                    <th>Jour</th>
                    <th>Nom</th>
                    <th>Nom vétérinaire</th>
                    <th>Prénom vétérinaire</th>
                    <th>Type</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody class="tbody-scroll">                
            <?php
            $lol = $app_rows[0]["start"].'/'.$app_rows[0]["app_day"].'/'.$app_rows[0]["pet_name"];
            echo $lol;
                if($app_rows){
                    for($i=0 ; $i<count($app_rows); $i++){
                        foreach($app_rows[$i] as $key => $value){
                            if($key == "start"){
                                echo "<tr class='tr-scroll'><td>{$value}</td>";
                            } else if($key == "canceled"){
                                echo '<td><input type="radio" name="optradio" onclick="cancel_app(this.value)" id="cancel_app" title="Supprimer le rdv de '.$app_rows[$i]["start"].'/'.$app_rows[$i]["app_day"].'"value="'.$app_rows[$i]["start"].'/'.$app_rows[$i]["app_day"].'/'.$app_rows[$i]["pet_name"].'"required/>Annuler</td></tr>';
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
    <div class="col-xs-6 msg" style="position:absolute;max-height:500px;right:55px;width:130px;top:margin-top:0px">
        <div class="btn-group-vertical">
            <form role="form" action="" method="POST" name="edit">
                <button class="btn btn-primary" name="add_app" title="Prendre Rendez-Vous" value="Ajouter">Prendre Rendez-vous</button>
                <button class="btn btn-primary" name="delete_app" title="Annuler un Rendez-vous">Annuler</button>
            </form>
            <input type="hidden" id="ID" value="<?php if(isset($_SESSION['ID'])){
                echo $_SESSION['ID'];
            }?>"/>
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
function cancel_app(){
    var ajaxRequest;  // The variable that makes Ajax possible!
     try {
         ajaxRequest = new XMLHttpRequest();
     }catch (e) {
         try {
             ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
         }catch (e) {
             try{
                 ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
             }catch (e){
                 alert("Your browser broke!");
                 return false;
             }
         }
     }
    /** Crée la connexion et récupère la réponse */
         
    ajaxRequest.onreadystatechange = function(){
       if(ajaxRequest.readyState == 4){
          var ajaxDisplay = document.getElementById('txtHint');
          ajaxDisplay.innerHTML = ajaxRequest.responseText;
       }
    }
    
 /** Valeurs à passer en arguments */
    var d = document.getElementById('cancel_app').value;
    var i = document.getElementById('ID').value;
    var queryString = "?d=" + d ;
    queryString += "&i=" + i;
    ajaxRequest.open("GET", "../tests/Models/cancel_apps.php" + queryString, true);
    ajaxRequest.send(); 
 }
 </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8SryylEF5v_C1_pTMszfi0wofkCpxbrE&callback=initMap">
</script>
<script type="text/javascript" src="../Player/Controllers/Functions/JS/img_preview.js"></script>
<script type="text/javascript" src="../Player/Controllers/Functions/JS/search.js"></script>
</html>
