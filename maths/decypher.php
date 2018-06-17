<!DOCTYPE>
<html>
<head>
    <meta content='http-equiv' content-type='text/html; charset = UTF-8'/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <style>
        body{
            background: #333333;
            font-size: 22px;
            font-family:'Titillium Web', sans-serif;
            overflow-x: scroll;
            max-width: 1800px;
            color: #decba4;
        }
    </style>
</head>
<body>
    <?php
        /** Méthode 1, ASCII avec formule + choix de clef */


        $key = 97;
        while($key<=122){
            $phrase = "Erqmrxu ohv lwlv Frulqqh yrxv sursrvh gh ghfkliiuhu fh shwlw whawh, hq idlvdqw xq surjudpph hq SKS, shuphwwdqw gh wurxyhu fh txh mh yrxv udfrqwh ;-) Mh wurxyh fhod wuhv ixq gh yrxv idluh frpsuhqguh frpphqw irqfwlrqqh fh frgh Fhvdu. O'xq ghv soxv ylhxa frgh halvwdqw hw o'xq ghv 1huv d frpsuhqguh. Oh suhplhu g'hqwuh yrxv txl frpsuhqg fh txh mh glw d jdjqhu xq fdih !!!!";
            $phrase = strtr($phrase = strtolower($phrase),array(";"=>"","."=>"","'"=>"","-"=>"",")"=>"",":"=>""," !"=>"",","=>""));
            $count = strlen($phrase);
            $phrase = str_split($phrase);
            $key = -$key;
                for($j=0;$j<count($phrase);$j++){
                    $ascii = ord($phrase[$j]);
                    if($ascii >= 97 && $ascii <=122){
                    $cal = ($ascii+97+$key+26)%26+97;
                    $lol[] = chr($cal);
                    }
                    $cal = chr($cal);
                    $phrase[$j] = $cal;
                }
            $decypher_push = implode("",$phrase);
            $tab []= $decypher_push;
            $key = -$key;
            $key++;
        }
        $count_e = 0;
        $key = 97;
        for($i=0;$i<count($tab);$i++){
            $count = substr_count($tab[$i],"e");
            if($count_e<$count){
                $count_e = $count;
                $index = $i+1;
            }
            echo '<p>Déchiffrage numéro '.($i+1).' : <br> '.$tab[$i].'. <p><br>';
            $key++;
        }

        echo '<br><h1><bold><i>La proposition ressemblant le plus au français est la proposition numéro '.$index.'.</i></bold></h1>';
        echo '<br>';

        $phrase = "Erqmrxu ohv lwlv Frulqqh yrxv sursrvh gh ghfkliiuhu fh shwlw whawh, hq idlvdqw xq surjudpph hq SKS, shuphwwdqw gh wurxyhu fh txh mh yrxv udfrqwh ;-) Mh wurxyh fhod wuhv ixq gh yrxv idluh frpsuhqguh frpphqw irqfwlrqqh fh frgh Fhvdu. O'xq ghv soxv ylhxa frgh halvwdqw hw o'xq ghv 1huv d frpsuhqguh. Oh suhplhu g'hqwuh yrxv txl frpsuhqg fh txh mh glw d jdjqhu xq fdih !!!!";
        
        /** Méthode 2, tableau associatif, possibilité de gérer et tester différents pas en créant des n tableaux pour n lettres de l'alphabet */
        
        $phrase = strtr($phrase=strtolower($phrase),array("a"=>"x","b"=>"y","c"=>"z","d"=>"a","e"=>"b","f"=>"c","g"=>"d","h"=>"e","i"=>"f","j"=>"g","k"=>"h","l"=>"i","m"=>"j","n"=>"k","o"=>"l","p"=>"m","q"=>"n","r"=>"o","s"=>"p","t"=>"q","u"=>"r","v"=>"s","w"=>"t","x"=>"u","y"=>"v","z"=>"w"));
        echo '<center>'.$phrase.'</center><br><br>';  

        /** Méthode 3, Calcul occurence de la lettre la plus utilisée, puis calcul de l'écart avec la lettre la plus utilisée en français => transformation du texte selon l'écart trouvé*/

        
        $phrase = "Erqmrxu ohv lwlv Frulqqh yrxv sursrvh gh ghfkliiuhu fh shwlw whawh, hq idlvdqw xq surjudpph hq SKS, shuphwwdqw gh wurxyhu fh txh mh yrxv udfrqwh ;-) Mh wurxyh fhod wuhv ixq gh yrxv idluh frpsuhqguh frpphqw irqfwlrqqh fh frgh Fhvdu. O'xq ghv soxv ylhxa frgh halvwdqw hw o'xq ghv 1huv d frpsuhqguh. Oh suhplhu g'hqwuh yrxv txl frpsuhqg fh txh mh glw d jdjqhu xq fdih !!!!";
        $max=0;
        foreach(count_chars($phrase=strtr(strtolower($phrase),array(" "=>"",","=>"","'"=>"",";"=>"","."=>"","-"=>"",":"=>"","1"=>"")),1) as $j=>$val){ 
            if($val>$max){
                $max=$val;
                $lettre= ord(chr($j));
            }
        }
        $step=abs($lettre-101);
        $phrase = str_split($phrase);
        for($i=0;$i<count($phrase);$i++){
            $ascii=ord($phrase[$i]);
            if($ascii>=97 && $ascii<=122){
                $cal = $ascii-97;
                if($cal>=$step){
                    $ascii = $ascii - $step;
                }else {
                    $new_step=$step-$cal;
                    $ascii = 122-($new_step-1);/** La véritable formule est 122 -($new_step-1). PHP est nul, je dois rajouter un -1 pour avoir x et ça change rien pour le reste xD  */
                }
            }
            $phrase[$i]=chr($ascii);
        }
        $phrase = implode("",$phrase);
        echo "{$phrase}";




        

        $table_rows = array(array('Jeudi',"Samedi","Mercredi"));
        $i=0;
        while($i<count($tab[$i])){
            $working_days[] = implode("",$table_rows[$i]);
            $i++;
        }
        $working_days = implode("",$working_days);

        $days = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
        for($i=0;$i<count($days);$i++){
            if(!strchr($working_days,$days[$i])){
                $days_available[] = $days[$i];
            }
        }

        echo "<br>";
        
        var_dump($days_available);
    ?>
</body>
</html>