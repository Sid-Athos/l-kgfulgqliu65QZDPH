<?php
    session_start();
    include '../tests/Models/db_connect.php';
    include('../tests/Models/actual_date.php');
    $actual_date = get_date($db);
    if($_SESSION['role'] == 'vet') {
        include '../tests/Views/html_top_vets.php'; 
    } else {

    }
    include('../tests/Views/lobby.php');
?>