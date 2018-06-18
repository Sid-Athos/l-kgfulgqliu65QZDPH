<?php
    $texte = "aoeoaoeoaeoaeóñí";
    $pattern_fr = "#[çèàéùçôêâ]#";
            $pattern_esp = "#[óñí]#";

            if(preg_match($pattern_fr,$texte)){
                echo "Un caractère spécial appartenant au français a été détecté.";
                die();
            } else if(preg_match($pattern_esp,$texte)){
                echo "Un caractère spécial correspondant à l'espagnol, au portugais ou à l'italien a été détecté";
                die();
            }
        ?>