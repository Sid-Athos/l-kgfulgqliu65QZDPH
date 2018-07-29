<?php
    unset($_POST['password'],$_POST['cpassword'],$_POST['register']);
    $tableau []= $_POST;
    $nom= "vets.csv";
    $tmp = fopen($nom,"a+");

        foreach($tableau as $line){
            fputcsv($tmp,$line);
        }
    fclose($tmp);
?>