<?php
    session_start();
    include('../tests/Controllers/session_check.php');
    include("../tests/Models/db_connect.php");
    include('../tests/Controllers/Functions/PHP/messages.php');
    include('../tests/Models/actual_date.php');
    $actual_date = get_date($db);
    include('../tests/Models/show_patients.php');
    $patients_rows = $stmt->fetchAll();

    if($_SESSION['role'] == 'vet'){
        include('../tests/Views/html_top_vets.php');
    } else if($_SESSION['role'] == 'client') {
        include('../tests/Views/html_top_clients.php');
    }

    include('../tests/Views/show_patients.php');
?>