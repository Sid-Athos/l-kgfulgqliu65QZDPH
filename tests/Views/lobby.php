<div class="row">

    <div class="col-xs-12"  style="margin-left:50px">
        <p style="font-size:10px;width:100px">
        <?php if (isset($successmsg)) { success($successmsg); } ?>
        <?php if (isset($errormsg)) { alert($errormsg); } ?></p>
        
    </div>
</div>
<div class ="row">
    <div class="col-xs-12" style="border:0.5px solid #333333;border-radius:4px;margin-left:300px">
        <div class="container" style="width:400px;max-height:350px;overflow-y:scroll;overflow-x:hidden;color:#decba4">
            <p class="first_sentence">Bienvenue sur le site de Heal mon Bichon</p>
            <p class="first_sentence">Votre clinique vétérinaire de référence à Ivry-sur-Seine</p>

            <p>Le cabinet est ouvert tous les jours de la semaine, de 8h à 19h30. Nocturne le premier dimanche de chaque mois.</p>
            <p>Nous sommes situés au 74, avenue Maurice Thorez à Ivry-sur-Seine</p>
            <p> Vous pouvez facilement accèder à notre clinique via le métro ligne 7 (arrêt Pierre et Marie Curie).</p>
            <p>Des correspondances vers le tramway sont disponibles aux stations :</p>
                <ul>
                    <li> Porte d'Italie</li> 
                    <li> Porte de Choisy</li>
                </ul> 
            <P>Des métros et RER (ligne 1/7/14 RER A/B/C/D) sont accessibles sur l'ensemble de la ligne 7.</p>
            <div id="map" class="map"  name="map_canvas">
            </div>
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