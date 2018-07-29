<div class="row">

    <div class="col-xs-12" style="margin-bottom:5px">
        <p style="font-size:10px;width:100px"><?php if (isset($successmsg)) { success($successmsg); } ?>
        <?php if (isset($errormsg)) { alert($errormsg); } ?></p>
        
    </div>
</div>
<div class="row">
    <div class="col-xs-6" style="max-height:400px;margin-left:10px;margin-top:-25px;background:background:#333333">
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
    <div class="col-xs-6 msg" style="position:absolute;max-height:500px;right:0;width:150px;top:margin-top:0px">
        <div class="btn-group-vertical">
            <form role="form" action="" method="POST" name="edit">
                <button class="btn btn-primary" name="add" value="Ajouter">Ajouter</button>
                <button class="btn btn-primary" name="edit">Modifier</button>
                <button class="btn btn-primary" name="delete">Supprimer</button>
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
De la simplicité 
De la réciprocité

Si ton profil :

- est non renseigné.

- ne contient pas de photos

- contient une seule photo sans toi ou dans laquelle tu te caches derrière ton chat ou ton bras (Au mieux je me dis que t'as pas de photos (très peu probable, génération selfie(sh)), au pire tu te trouves moches et t'es complexée, et je pense toujours au pire)

- contient le mot "radin" (Il y a de très bon sites pour michtonner tu sais, c'est pas parce qu'on paye pour vous "charmer" qu'il y a une ambition de se faire détroussé)

- contient 15 photos, les 15 avec le même angle, qui me font me demander si t'aurais pas un problème de cou en plus de ne pas savoir varier

- contient le mot attachiante. Si t'es chiante reste dans ton coin. Les gens chiants ne sont pas attachants. Je trouve qu'ils sont juste chiants

T'as 0 chances

Je pars du principe que nous sommes sur un site de rencontre et qu'en conséquence il faut savoir faire preuve de transparence (je ne te demande pas de te mettre à nu dans ta description non plus) si on veut optimiser les chances

Et puis si tu ne l'es pas ici ou dès le départ, j'ai bien peur que tu ne sois pas une personne en qui on peut faire confiance
