<?php
    session_start();
    var_dump($_SESSION);
    include '../tests/Models/db_connect.php';
    include('../tests/Models/actual_date.php');
    $actual_date = get_date($db);
    include '../tests/Views/html_top_vets.php';
    include('../tests/Views/lobby.php');
?>