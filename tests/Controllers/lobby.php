<?php
    session_start();
    var_dump($_SESSION);
    include('../tests/Controllers/session_check.php');
    include '../tests/Models/db_connect.php';
    include('../tests/Models/actual_date.php');
    $actual_date = get_date($db);
    
    if($_SESSION['role'] === 'vet') {
        include '../tests/Views/html_top_vets.php'; 
    } else {
        include '../tests/Views/html_top_clients.php'; 
    }
    include('../tests/Views/lobby.php');
?>