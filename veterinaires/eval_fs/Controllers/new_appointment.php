<?php
    include("./Models/db_connect.php");
    include('./Controllers/Functions/PHP/messages.php');
    include('./Views/templates/clients_navbar.php');
    include('./Views/templates/html_top_msg.php');

    if(!isset($_POST)){
        include('./Views/templates/animal_choice.php');
    }
    
    switch($_POST):
        case($_POST['new_animal'] == "no"):
        break;
        case($_POST['new_animal'] == "oui"):
        break;
        default:
    endswitch;
?>