<?php
/* 
*   EXERCICE N°4 : Boustrophédon
*
*/

function BoustroDecipher($text) {
    $len = strlen($text);
    $inputArr = str_split($text);
    var_dump($inputArr);

    $i = 0;
    $k = 0;
    $j = 0;
    do{
        while ($j < 5){
            $tab[$i][$j] = $inputArr[$k];
            $j++;
            $k++;
        }

        while ($j > 0){
            $tab[$i][$j] = $inputArr[$k];
            $j++;
            $k++;
        }

        $i++;
    } while ($i < 4);
    return $tab;

}

$text = "je suis un texte";

echo strlen($text);

$res = BoustroDecipher($text);

var_dump($res);


?>