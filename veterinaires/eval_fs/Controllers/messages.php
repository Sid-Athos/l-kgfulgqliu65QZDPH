
<?php
session_start();
include_once("./Models/db_connect.php");
include('./Controllers/Functions/PHP/messages.php');

switch(isset($_POST['messages'])):
    case 'Conversations':
    case 'Messages reçus':
    case 'Messages envoyés':
    break;
    default:
        include('./Views/templates/html_top.php');
            if(isset($_SESSION['ID'])){
                include('./Views/templates/vets_navbar.php');
            } else {
                include('./Views/templates/clients_navbar.php');
            }
        include('./Views/templates/messages_menu.php');
endswitch;
var_dump($_SESSION);
include('./Views/templates/html_bottom.html');
?>