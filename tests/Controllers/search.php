<?php
    session_start();
    include('./Controllers/session_check.php');
    include("./Models/db_connect.php");
    include('./Controllers/Functions/PHP/date_to_mysql.php');
    include('./Controllers/Functions/PHP/messages.php');
    include('./Models/actual_date.php');
    $actual_date = get_date($db);

    if($_SESSION['role'] === 'vet'){
        include('./Views/html_top_vets.php');
    } else if ($_SESSION['role'] == 'client') {
        include('./Views/html_top_clients.php');
    }
?>