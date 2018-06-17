<!DOCTYPE HTML>

<head>

    <title>Analyse fréquentielle</title>
    <meta content='http-equiv' content-type='text/html; charset = UTF-8'/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <style>
            body{
                padding-left: 3%;
                background: #333333;
                font-size: 18px;
                font-family:'Titillium Web', sans-serif;
                overflow-x: scroll;
                max-width: 1800px;
                color: #decba4;
                text-align:center;
            }
            button-sid{
                background: #decba4;
            }
            textarea{
                font-size: 18px;
                font-family:'Titillium Web', sans-serif;
            }
            td {
                min-width:250px;;
            }
            table, th, td{
                position: relative;
                text-align: center;
                border: 2px solid #decba4;
                border-collapse: collapse;
                font-size:20px;
                color:"white";
                width: 45%;
            }
		</style>
</head>
<body>
<?php
    
    /* Affichage formulaire */
    if(!isset($_POST['texte'])){
        
        echo   '<form action="" method="POST">
                Saisissez le texte à analyser :<br> <textarea rows="8" cols="50" name="texte" value =""></textarea><br>
                <input class = "button-sid" type="submit">
                </form>';
        }

    /* Récupération du texte à traiter */

    if(!empty($_POST['texte'])){
    
            echo "<br>".$_POST['texte']."<br><br>";
            $phrase1 = str_split(strtolower($_POST['texte']));
            $len = count($phrase1);
            $phrase = $_POST['texte'];           


            /* Vérification spécifités linguistiques */

            for($i=0; $i<count($phrase1);$i++){
                
                if(ord($phrase1[$i]) === ord("é")||ord($phrase1[$i]) === ord("è")||ord($phrase1[$i]) === ord("à")||ord($phrase1[$i]) === ord("ç")){
                    
                    echo "<br><br>C'est du français mamène, check les caractères spéciaux, j'en ai détecté un en position ".($i+1)." !";
                    echo '<br><form action="" method="POST">
                        <input type="submit" value="Retour">
                        </form>';
                    die();

                } else if(ord($phrase1[$i]) == "è" || ord($phrase1[$i]) == ord("í") || ord($phrase1[$i]) == ord("ó") || ord($phrase1[$i]) == ord("ú")){
                    
                    echo "Une des langues parmis l'espagnol, l'italien et le portugais  a été détecté.Un caractère spécial a été trouvé en position ".($i+1)." est présent dans le texte.";
                    echo '<br><form action="" method="POST">
                        <input type="submit" value="Retour">
                        </form>';
                    die();

                }
            }
            
            /* Calcul Occurence(s) + insert tableau */
            $c = strlen($phrase);
            $eff = 0;
            foreach(count_chars($phrase=strtr(strtoupper($phrase),array(" "=>"",","=>"","'"=>"",";"=>"","."=>"","-"=>"",":"=>"")),1) as $j=>$val){ 
                
                $cal = ($val/$c)*100;
                $push[] = array(chr($j),array("%"=>$cal,"Occurence(s)"=>$val));
                $tab[chr($j)]['%']=$cal;
                $tab[chr($j)]['Occurence(s)']=$val;
                $eff++;

            }
            
            $tab['Total']['Effectif : '] = $eff;
            $tab['Total']['Nombre de lettres : '] = $c;
            

            /* Affichage tableau */
            echo "<caption> Tableau récapitulatif des lettres trouvées :</caption>";    
            echo '<center><table><thead><tr><td>Lettre</td><td>Pourcentage (%) : </td><td>Occurence(s) : </td></tr></thead>';
            echo '<tbody>';
            
            foreach($tab as $i=>$val){
                
                if($i=='Total'){
                    
                    echo '<tr><td>'.$i.'</td>';

                } else {
                
                    echo '<tr><td>'.$i.'</td>';

                }
                
                foreach($val as $key=>$value){
                    
                    if($key=='%'){
                   
                    echo '<td>';
                    echo number_format($value,2,",","'");
                    echo '</td>';
                    
                    }else if($key == 'Occurence(s)'){
                        
                        echo '<td>';
                        echo number_format($value,0,"","'");
                        echo '</td></tr>';

                    }else if($key=='Effectif : '){
                        
                        echo '<td>'.$key;
                        echo number_format($value,0,"","'");
                        echo '</td>';

                    }else if($key == 'Nombre de lettres : '){
                        
                        echo '<td>'.$key;
                        echo number_format($value,0,"","'");
                        echo '</td></tr></tbody></table></center>';

                    }
                }
            }
            
            /* Vérification si textes écrit en Anglais, puis portugais, et enfin en français */
            if(isset($tab['H'])){
                
                if(number_format($tab['H']['%'],0) > 1){
                    
                    echo '<br><h1><bold>Ce texte est très probablement en anglais.</bold></h1><br>';
                    echo '<form action="" method="POST">
                        <input type="submit" value="Retour">
                        </form>';

                }else if (isset($tab['W'])){
                    
                    if(number_format($tab['W']['%'],0) > 2){
                        
                        echo '<br><h1><bold>Ce texte est très probablement en anglais.</bold></h1><br>';
                        echo '<form action="" method="POST">
                                <input type="submit" value="Retour">
                                </form>';

                    } else if(!isset($tab['L'])){
                        
                        echo '<br><h1><bold>Ce texte est très probablement en portugais.</bold></h1><br>';
                        echo '<form action="" method="POST">
                                <input type="submit" value="Retour">
                                </form>';
                    
                    } else {
                        
                        echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1><br>';
                        echo '<form action="" method="POST">
                                <input type="submit" value="Retour">
                                </form>';
                    }
           
                } else if(!isset($tab['L'])){
                        
                        echo '<br><h1><bold>Ce texte est très probablement en portugais.</bold></h1><br>';
                        echo '<form action="" method="POST">
                                <input type="submit" value="Retour">
                                </form>';
                    
                } else {
                    
                    echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1><br>';
                    echo '<form action="" method="POST">
                            <input type="submit" value="Retour">
                            </form>';
                }
           
               } else if (isset($tab['W'])){
                
                if(number_format($tab['W']['%'],0) > 2){
                    
                    echo '<br><h1><bold>Ce texte est très probablement en anglais.</bold></h1><br>';
                    echo '<form action="" method="POST">
                            <input type="submit" value="Retour">
                            </form>';
                } else if(!isset($tab['L'])){
                    
                    echo '<br><h1><bold>Ce texte est très probablement en portugais.</bold></h1><br>';
                    echo '<form action="" method="POST">
                            <input type="submit" value="Retour">
                            </form>';
                } else {
                
                    echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1><br>';
                    echo '<form action="" method="POST">
                        <input type="submit" value="Retour">
                        </form>';

                }
       
           } else if(!isset($tab['L'])){
                
                echo '<br><h1><bold>Ce texte est très probablement en portugais.</bold></h1><br>';
                echo '<form action="" method="POST">
                        <input type="submit" value="Retour">
                        </form>';
            } else{
                
                echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1><br>';
                echo '<form action="" method="POST">
                        <input type="submit" value="Retour">
                        </form>';
            }
            
        } else if(isset($_POST['texte']) && empty($_POST['texte'])){
            
            echo "C'est vide mamène, saisis un texte stp";
            echo   '<br><br><form action="" method="POST">
                Saisissez le texte à analyser :<br> <textarea rows="8" cols="50" name="texte" value =""></textarea><br>
                <input type="submit">
                </form>';

        }
        
?>
</body>

</html>