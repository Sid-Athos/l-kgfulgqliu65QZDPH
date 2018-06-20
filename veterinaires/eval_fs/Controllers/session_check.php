<?php
        if(!isset($_SESSION['ID'])){
            header("refresh:2;url=./index.php?page=login");
            die();
        } 
?>