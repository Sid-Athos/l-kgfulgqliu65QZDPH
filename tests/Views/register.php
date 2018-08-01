<div class="row" >
<div class="col-xs-12"style="margin:auto;margin-top:60px;display:inline-block">
                    <?php if ($flag_name_taken) { alert($name_taken); } ?>
                    <?php if (isset($successmsg)) { success($successmsg); } ?>
                    <?php if (isset($errormsg)) { alert($errormsg); } ?>
                    <?php if (isset($password_error)) alert($password_error); ?>
                    <?php if (isset($email_error)) alert($email_error); ?>
                    <?php if (isset($cpassword_error)) alert($cpassword_error); ?>
                    </div>
                    </div>
<div class="row" >
        <div class="col-xs-6" style="margin:auto;margin-top:60px;display:block;max-height:400px">
            <div class="container" style="max-height:350px;overflow-y:hidden;overflow-x:hidden">
                <form role="form" class="form container-fluid"  method="POST" style="width:400px;overflow-y:scroll;overflow-x:hidden;height:350px;color:#decba4" name="register_form" >
                        
                    <fieldset class="well" >
                        <h4 style="position:relative;padding:8px;left:25%">Inscription</h4>
                        <div class="form-group">
                            <label class="label" for="name" style='margin-top:5px'>Email</label>
                            <input type="email" class="form-control space-bottom" autofocus name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required value="<?php if($error || $flag_email_taken || $flag_name_taken) echo $email; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Prénom</label>
                            <input type="text" class="form-control space-bottom" name="first_name" placeholder="Prénom" required value="<?php if($error || $flag_email_taken || $flag_name_taken) echo $first_name; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Nom</label>
                            <input type="text" class="form-control space-bottom" name="last_name" placeholder="Nom" required value="<?php if($error || $flag_email_taken || $flag_name_taken) echo $last_name; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Adresse</label>
                            <input type="text" class="form-control space-bottom" name="address" placeholder="Adresse" required value="<?php if($error || $flag_email_taken || $flag_name_taken) echo $address; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Code Postal</label>
                            <input type="text" class="form-control space-bottom" name="postal_code" placeholder="Code Postal" pattern=".{2,5}" title="Entrez un code postal valide" required value="<?php if($error || $flag_email_taken || $flag_name_taken) echo $postal_code; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Ville</label>
                            <input type="text" class="form-control space-bottom" name="city" placeholder="Ville" required value="<?php if($error || $flag_email_taken || $flag_name_taken) echo $city; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Téléphone</label>
                            <input type="tel" class="form-control space-bottom" name="phone_number" placeholder="Numéro de téléphone" minlength="10" maxlength="12" pattern="^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$"
                            title="Entrez un numéro de téléphone valide" required value="<?php if($error || $flag_email_taken || $flag_name_taken) echo $phone_number; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="label"for="name">Mot de passe</label>
                            <input type="password" class="form-control space-bottom" name="password" placeholder="Mot de passe" pattern=".{6,}" title="Au moins 6 charactères" required/>
                            
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Confirmation mot de passe</label>
                            <input type="password" class="form-control space-bottom" name="cpassword" placeholder="Mot de passe" required/>
                            
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary space-bottom" name="register" value="S'inscrire" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
            
        <div class="col-xs-6" style="margin:auto;margin-top:60px;margin-left:0px;display:block;max-height:400pxborder:0.5px solid #333333;border-radius:4px">
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