<?php
    session_start();
    include('../tests/Controllers/session_check.php');
    include("../tests/Models/db_connect.php");
    include('../tests/Controllers/Functions/PHP/messages.php');
    include('../tests/Models/actual_date.php');
    $actual_date = get_date($db);
    
    if($_SESSION['role'] == 'vet'){
        include('../tests/Views/html_top_vets.php');
        include('../tests/Models/show_patients_vets.php');
        $patients_rows = $stmt->fetchAll();
    } else if($_SESSION['role'] == 'client') {
        include('../tests/Views/html_top_clients.php');
        include('../tests/Models/show_patients.php');
        $patients_rows = $stmt->fetchAll();
    }
switch(isset($_POST)):
    case(isset($_POST['add_history'])):
        include('../tests/Views/history_form.php');
       break;
    default:
    if($_SESSION['role'] == 'vet'){
        include('../tests/Views/show_patients_vets.php');
    } else if($_SESSION['role'] == 'client') {
        include('../tests/Views/show_patients.php');
    }
endswitch;
?>