<?php
    session_start();
    include("./Models/db_connect.php");
    include('./Controllers/Functions/PHP/messages.php');

    if($_SESSION['role'] == 'vet'){
        include('./Views/templates/vets_navbar.php');
    }else if($_SESSION['role'] == 'client') {
        include('./Views/templates/clients_navbar.php');
    }
    include('./Views/templates/html_top_msg.php');
    if($_SESSION['role'] == 'client'){
        include('./Models/get_appointments.php');
        $app_rows = $stmt->fetchAll();
    } else if($_SESSION['role'] == 'vet'){
        include('./Models/get_vets_appointments.php');
        $add_rows = $stmt->fetchAll();
    }

    if(isset($_POST['cancel'])){
        include('./Models/cancel_app.php');
    }
    include('./Views/templates/cancel_app_form.php');

?>