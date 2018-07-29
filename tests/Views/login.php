    <div class="row">

        <div class="col-xs-12">
            <p style="font-size:10px;width:100px"><?php if (isset($successmsg)) { success($successmsg); } ?>
            <?php if (isset($errormsg)) { alert($errormsg); } ?></p>
            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6" style="max-height:400px;width:55%">
            <div class="container" style="width:350px;max-height:350px;overflow-y:hidden;overflow-x:hidden">
            <form action="../tests/index.php?page=Login" method="POST" name="login" value="log">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <p style="color:#D38312"><strong>Connexion</strong></p>
                        <div class="col-auto" style="margin-left:-15px">
                        <label class="sr-only" for="inlineFormInputGroup">Email</label>
                        <p style="color:#decba4">Mail</p>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                            </div>
                            <input type="text" name="em" class="form-control" id="inlineFormInputGroup" title="Veuillez saisir l'email valide correspondant à votre compte" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                            style="width:175px" placeholder="Adresse mail" value='<?php if(isset($_POST["em"])){ echo $_POST["em"];}?>'>
                        </div>
                        </div>
                        <p style="color:#decba4">Mot de Passe</p>
                    <label class="sr-only" for="inlineFormInput" style="margin-top:20px">Mot de Passe</label>
                    <input type="password" name="pw" class="form-control mb-2" value='<?php if(isset($_POST["pw"])){ echo $_POST["pw"];}?>' id="inlineFormInput" title="Veuillez saisir le mot de passe correspondant à votre adresse mail (minimum 5 caractères)"style="width:212px" pattern=".{5,45}" required placeholder="Mot de passe">
                    </div>
                    <div class="col-auto">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label" for="autoSizingCheck">
                        Se souvenir de moi
                        </label>
                    </div>
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2" required style="background:#333333;margin-left:-10px" name="login">Connexion</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
            
        <div class="col-xs-6" style="border:0.5px solid #333333;border-radius:4px;width:400px;margin-right:-5px">
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
                <div id="map" class="map"  name="map_canvas"></div>
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