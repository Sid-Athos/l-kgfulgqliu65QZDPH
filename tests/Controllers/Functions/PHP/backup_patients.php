<?php
/* Petit backup des familles en CSV */

    unset($_POST['register_animal'],$_POST['my_animal']);
    $tableau []= $_POST;
    $nom= "patients.csv";
    $tmp = fopen($nom,"a+");

        foreach($tableau as $line){
            fputcsv($tmp,$line);
        }
    fclose($tmp);
?>