<?php
    include('./maths_views/html_top.html');
    include('./maths_views/navbar.php');

    /* Affichage formulaire */
    
    if(!isset($_POST['texte'])){
            
        include('./maths_views/text_area_form.php');

    }

    /* Récupération du texte à traiter */

    if(!empty($_POST['texte'])){
    
        echo "<br>{$_POST['texte']}<br>";
        $phrase1 = str_split(strtolower($_POST['texte']));
        $len = count($phrase1);
        $phrase = $_POST['texte'];           


        /* Vérification spécifités linguistiques */

        $pattern_fr = "#[çèàéùçôêâ]#";
        $pattern_esp = "#[óñí]#";

        if(preg_match($pattern_fr,$phrase)){
            echo "Un caractère spécial appartenant au français a été détecté.";
            die();
        } else if(preg_match($pattern_esp,$phrase)){
            echo "Un caractère spécial correspondant à l'espagnol, au portugais ou à l'italien a été détecté";
            die();
        }

        /* Calcul Occurence(s) + insert tableau */

        $c = strlen($phrase);
        $eff = 0;
        foreach(count_chars($phrase=strtr(strtoupper($phrase),array(" "=>"",","=>"","'"=>"",";"=>"","."=>"","-"=>"",":"=>"")),1) as $j=>$val){ 
            
            $cal = ($val/$c)*100;
            $tab[chr($j)]['%']=$cal;
            $tab[chr($j)]['Occurence(s)']=$val;
            $eff++;

        }
        
        $tab['Total']['Effectif : '] = $eff;
        $tab['Total']['Nombre de lettres : '] = $c;
            

        include('./maths_views/occurences_table.php');
        
        /* Vérification si textes écrit en Anglais, puis portugais, et enfin en français */



        if(isset($tab['H'])){
            
            if(number_format($tab['H']['%'],0) > 1){
                
                echo '<br><h1><bold>Ce texte est très probablement en anglais.</bold></h1>';
                    include('./maths_views/return_form.php');

            }else if (isset($tab['W'])){
                
                if(number_format($tab['W']['%'],0) > 2){
                    
                    echo '<br><h1><bold>Ce texte est très probablement en anglais.</bold></h1>';
                            include('./maths_views/return_form.php');

                } else if(!isset($tab['L'])){

                        if (isset($tab['E'])){
        
                            if(number_format($tab['A']['%'],0) > number_format($tab['E']['%'],0)){
                        
                                echo '<br><h1><bold>Ce texte est très probablement en portugais.</bold></h1>';
                                        include('./maths_views/return_form.php');
                            } else {
            
                                echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1>';
                                include('./maths_views/return_form.php');
                            }
                        } else {
                        
                        echo '<br><h1><bold>Ce texte est très probablement en Portugais.</bold></h1>';
                                include('./maths_views/return_form.php');
                        }
                    } else {
                    
                        echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1>';
                            include('./maths_views/return_form.php');
        
                    }
        
            } else if(!isset($tab['L'])) {

                    if (isset($tab['E'])){
    
                        if(number_format($tab['A']['%'],0) > number_format($tab['E']['%'],0)){
                    
                            echo '<br><h1><bold>Ce texte est très probablement en portugais.</bold></h1>';
                                    include('./maths_views/return_form.php');
                        } else {
        
                            echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1>';
                            include('./maths_views/return_form.php');
                        }
                    } else {
                    
                    echo '<br><h1><bold>Ce texte est très probablement en Portugais.</bold></h1>';
                            include('./maths_views/return_form.php');
                    }
                } else {
                
                    echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1>';
                        include('./maths_views/return_form.php');
    
                }
        
        } else if (isset($tab['W'])){
            
            if(number_format($tab['W']['%'],0) > 2){
                
                echo '<br><h1><bold>Ce texte est très probablement en anglais.</bold></h1>';
                    include('./maths_views/return_form.php');
            
            } else if(!isset($tab['L'])){

                if (isset($tab['E'])){

                    if(number_format($tab['A']['%'],0) > number_format($tab['E']['%'],0)){
                
                        echo '<br><h1><bold>Ce texte est très probablement en portugais.</bold></h1>';
                                include('./maths_views/return_form.php');
                    } else {
    
                        echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1>';
                        include('./maths_views/return_form.php');
                    }
                } else {
                
                echo '<br><h1><bold>Ce texte est très probablement en Portugais.</bold></h1>';
                        include('./maths_views/return_form.php');
                }
            } else {
            
                echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1>';
                    include('./maths_views/return_form.php');

            }
    
        } else if(!isset($tab['L'])){

            if (isset($tab['E'])){

                if(number_format($tab['A']['%'],0) > number_format($tab['E']['%'],0)){
            
                    echo '<br><h1><bold>Ce texte est très probablement en portugais.</bold></h1>';
                            include('./maths_views/return_form.php');
                } else {

                    echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1>';
                    include('./maths_views/return_form.php');
                }
            } else {
            
            echo '<br><h1><bold>Ce texte est très probablement en Portugais.</bold></h1>';
                    include('./maths_views/return_form.php');
            }
        } else {

            echo '<br><h1><bold>Ce texte est très probablement en Français.</bold></h1>';
                    include('./maths_views/return_form.php');

        }   
        
    } else if(isset($_POST['texte']) && empty($_POST['texte'])){
            
            echo "C'est vide mamène, saisis un texte stp";
                    include('./maths_views/text_area_form.php');

    }


    switch($tab):
        case(isset($tab['H'])):
            switch($tab['H']['%']):
                case(number_format($tab['H']['%'],0) > 2):
                    echo 'lol';
                    break;
        case(isset($tab['W'])):
            switch($tab['W']['%']):
                case(number_format($tab['W']['%'],0) > 2):
                    break;
        case(!isset($tab['L'])):
            switch($tab['L']):
                case(isset($tab['E'])):
                    switch($tab['E']):
                        case(number_format($tab['E']['%'],0) < number_format($tab['A']['%'],0)):
                            break;

    include('./maths_views/html_bottom.html');

?>
