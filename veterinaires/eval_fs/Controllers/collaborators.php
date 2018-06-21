<?php
    session_start();
    include('./Views/templates/html_top_msg.php');
    include("./Models/db_connect.php");
    include('./Views/templates/vets_navbar.php');
    include('./Models/show_collaborators.php');
    $colls_rows = $stmt -> fetchAll();
    include('./Views/templates/display_collaborators');

    if(isset($_POST['add_collaborator']))
    switch($_POST['add_collaborator']):
        case 'register':
            include('./Views/breaks.php');
