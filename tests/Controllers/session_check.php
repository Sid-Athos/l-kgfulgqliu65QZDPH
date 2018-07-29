<?php
    if(empty($_SESSION['ID'])){
        header("refresh:0;url=../tests/index.php?page=Login");
        die();
    } 
?>