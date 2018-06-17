<?php
    function session_check($SESSION){
        if(!isset($_SESSION['name'])){
            header('refresh: 10;location: register.php');
            die();
        } 
    }
?>